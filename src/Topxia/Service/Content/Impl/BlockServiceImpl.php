<?php

namespace Topxia\Service\Content\Impl;

use Topxia\Common\ArrayToolkit;
use Topxia\Service\Common\BaseService;
use Topxia\Service\Content\BlockService;

class BlockServiceImpl extends BaseService implements BlockService
{
    public function createBlockTemplate($blockTemplate)
    {
        if (!ArrayToolkit::requireds($blockTemplate, array('code', 'mode', 'category', 'meta', 'data', 'templateName', 'title'))) {
            throw $this->createServiceException('创建编辑区失败，缺少必要的字段');
        }
        $blockTemplate['createdTime'] = time();
        $blockTemplate['updateTime']  = time();
        $createdBlockTemplate         = $this->getBlockTemplateDao()->addBlockTemplate($blockTemplate);
        return $createdBlockTemplate;
    }

    public function findBlockHistoryCountByBlockId($blockId)
    {
        return $this->getBlockHistoryDao()->findBlockHistoryCountByBlockId($blockId);
    }

    public function getLatestBlockHistory()
    {
        return $this->getBlockHistoryDao()->getLatestBlockHistory();
    }

    public function getLatestBlockHistoriesByBlockIds($blockIds)
    {
        $blockHistories = array();
        foreach ($blockIds as $key => $blockId) {
            $block                                     = $this->getBlockDao()->getBlock($blockId);
            $blockHistories[$block['blockTemplateId']] = $this->getBlockHistoryDao()->getLatestBlockHistoryByBlockId($blockId);
        }

        return $blockHistories;
    }

    public function getBlock($id)
    {
        $result = $this->getBlockDao()->getBlock($id);
        if (empty($result)) {
            $blockTemplate                    = $this->getBlockTemplate($id);
            $blockTemplate['blockTemplateId'] = $blockTemplate['id'];
            $blockTemplate['blockId']         = 0;
            return $blockTemplate;
        } else {
            $blockTemplate             = $this->getBlockTemplate($result['blockTemplateId']);
            $result['meta']            = $blockTemplate['meta'];
            $result['blockId']         = $result['id'];
            $result['blockTemplateId'] = $blockTemplate['id'];

            return $result;
        }
    }

    public function getBlockHistory($id)
    {
        return $this->getBlockHistoryDao()->getBlockHistory($id);
    }

    public function generateBlockTemplateItems($block)
    {
        preg_match_all("/\(\((.+?)\)\)/", $block['template'], $matches);
        while (list($key, $value) = each($matches[1])) {
            $matches[1][$key] = trim($value);
        };

        $templateDatas = ($matches[1]) ? ($matches[1]) : '';
        $templateItems = array();

        if (empty($templateDatas)) {
            return $templateItems;
        } else {
            foreach ($templateDatas as &$item) {
                $item  = explode(':', $item);
                $arr[] = array('title' => $item[0], 'type' => $item[1]);
            }

            $templateItems = ArrayToolkit::index($arr, 'title');
            $templateItems = array_values($templateItems);

            return $templateItems;
        }
    }

    public function getBlockByCode($code)
    {
        $user = $this->getCurrentUser();

        $result = $this->getBlockDao()->getBlockByCodeAndOrgId($code, $user->getSelectOrgId());
        if (empty($result)) {
            $blockTemplate                    = $this->getBlockTemplateByCode($code);
            $blockTemplate['blockTemplateId'] = $blockTemplate['id'];
            $blockTemplate['blockId']         = 0;
            return $blockTemplate;
        } else {
            $blockTemplate             = $this->getBlockTemplate($result['blockTemplateId']);
            $result['meta']            = $blockTemplate['meta'];
            $result['mode']            = $blockTemplate['mode'];
            $result['templateName']    = $blockTemplate['templateName'];
            $result['blockId']         = $result['id'];
            $result['blockTemplateId'] = $blockTemplate['id'];
            return $result;
        }
    }

    public function findBlockHistorysByBlockId($blockId, $start, $limit)
    {
        return $this->getBlockHistoryDao()->findBlockHistorysByBlockId($blockId, $start, $limit);
    }

    public function getBlocksByBlockTemplateIdsAndOrgId($blockTemplateIds, $orgId)
    {
        $blocks = array();
        foreach ($blockTemplateIds as $key => $blockTemplateId) {
            $blocks[] = $this->getBlockDao()->getBlockByTemplateIdAndOrgId($blockTemplateId, $orgId);
        }

        return $blocks;
    }

    public function createBlock($block)
    {
        if (!ArrayToolkit::requireds($block, array('code', 'data', 'content', 'blockTemplateId'))) {
            throw $this->createServiceException($this->getKernel()->trans('创建编辑区失败，缺少必要的字段'));
        }
        $user                 = $this->getCurrentUser();
        $block['createdTime'] = time();
        $block['updateTime']  = time();
        $block['userId']      = $user['id'];
        $block['orgId']       = $user['orgId'];
        unset($block['mode']);
        $createdBlock = $this->getBlockDao()->addBlock($block);

        $blockHistoryInfo = array(
            'blockId'     => $createdBlock['id'],
            'content'     => $createdBlock['content'],
            'userId'      => $createdBlock['userId'],
            'createdTime' => time()
        );
        $history = $this->getBlockHistoryDao()->addBlockHistory($blockHistoryInfo);

        $blockTemplate         = $this->getBlockTemplateDao()->getBlockTemplate($createdBlock['blockTemplateId']);
        $createdBlock['id']    = $blockTemplate['id'];
        $createdBlock['title'] = $blockTemplate['title'];
        $createdBlock['mode']  = $blockTemplate['mode'];
        return $createdBlock;
    }

    public function updateBlock($id, $fields)
    {
        $block = $this->getBlockDao()->getBlock($id);
        $user  = $this->getCurrentUser();

        if (!$block) {
            throw $this->createServiceException($this->getKernel()->trans('此编辑区不存在，更新失败!'));
        }
        $fields['updateTime'] = time();
        unset($fields['mode']);
        $updatedBlock = $this->getBlockDao()->updateBlock($id, $fields);

        $blockHistoryInfo = array(
            'blockId'     => $updatedBlock['id'],
            'content'     => $updatedBlock['content'],
            'data'        => $updatedBlock['data'],
            'userId'      => $user['id'],
            'createdTime' => time()
        );

        $this->getBlockHistoryDao()->addBlockHistory($blockHistoryInfo);

        $this->getLogService()->info('system', 'update_block', "更新编辑区#{$id}", array('content' => $updatedBlock['content']));

        $blockTemplate         = $this->getBlockTemplateDao()->getBlockTemplate($updatedBlock['blockTemplateId']);
        $updatedBlock['id']    = $blockTemplate['id'];
        $updatedBlock['title'] = $blockTemplate['title'];
        $updatedBlock['mode']  = $blockTemplate['mode'];

        return $updatedBlock;
    }

    public function deleteBlock($id)
    {
        $block = $this->getBlockDao()->getBlock($id);
        $this->getBlockHistoryDao()->deleteBlockHistoryByBlockId($block['id']);

        return $this->getBlockDao()->deleteBlock($id);
    }

    public function getContentsByCodes(array $codes)
    {
        if (empty($codes)) {
            throw $this->createServiceException($this->getKernel()->trans('获取内容失败，不允许查询空编号所对应的内容!'));
        }

        $cdn    = $this->getSettingService()->get('cdn');
        $cdnUrl = empty($cdn['enabled']) ? '' : $cdn['url'];

        $contents = array();
        foreach ($codes as $key => $value) {
            $block = $this->getBlockDao()->getBlockByCode($value);
            if ($block) {
                if ($cdnUrl) {
                    $contents[$value] = preg_replace('/\<img(\s+)src=\"\/files\//', "<img src=\"{$cdnUrl}/files/", $block['content']);
                } else {
                    $contents[$value] = $block['content'];
                }
            } else {
                $contents[$value] = '';
            }
        }

        return $contents;
    }

    public function updateTemplateContent($id, $content)
    {
        $blockTemplate = $this->getBlockTemplateDao()->getBlockTemplate($id);
        if (!$blockTemplate) {
            throw $this->createServiceException($this->getKernel()->trans('此编辑区不存在，更新失败!'));
        }

        return $this->getBlockTemplateDao()->updateBlockTemplate($id, array(
            'content'    => $content,
            'updateTime' => time()
        ));
    }

    public function recovery($blockId, $history)
    {
        $block         = $this->getBlockDao()->getBlock($blockId);
        $blockTemplate = $this->getBlockTemplateDao()->getBlockTemplate($block['blockTemplateId']);
        if (empty($block)) {
            throw $this->createServiceException($this->getKernel()->trans('此编辑区不存在，更新失败!'));
        }

        if ($blockTemplate['mode'] == 'template' && empty($history['data'])) {
            throw $this->createServiceException($this->getKernel()->trans('此编辑区数据不存在，更新失败!'));
        }

        return $this->getBlockDao()->updateBlock($blockId, array(
            'content' => $history['content'],
            'data'    => $history['data']
        ));
    }

    public function getBlockByTemplateIdAndOrgId($blockTemplateId, $orgId = 0)
    {
        $block = $this->getBlockDao()->getBlockByTemplateIdAndOrgId($blockTemplateId, $orgId);
        if (empty($block)) {
            $blockTemplate                    = $this->getBlockTemplate($blockTemplateId);
            $blockTemplate['blockTemplateId'] = $blockTemplate['id'];
            $blockTemplate['blockId']         = 0;
            return $blockTemplate;
        }
        $blockTemplate            = $this->getBlockTemplate($blockTemplateId);
        $block['blockId']         = $block['id'];
        $block['blockTemplateId'] = $blockTemplate['id'];
        $block['code']            = $blockTemplate['code'];
        $block['template']        = $blockTemplate['template'];
        $block['tips']            = $blockTemplate['tips'];
        $block['mode']            = $blockTemplate['mode'];
        $block['meta']            = $blockTemplate['meta'];
        $block['title']           = $blockTemplate['title'];
        $block['templateName']    = $blockTemplate['templateName'];

        return $block;
    }

    public function getBlockTemplate($id)
    {
        $result = $this->getBlockTemplateDao()->getBlockTemplate($id);
        if (empty($result)) {
            return;
        }
        return $result;
    }

    public function deleteBlockTemplate($id)
    {
        $block = $this->getBlockDao()->getBlockByTemplateId($id);
        $this->getBlockHistoryDao()->deleteBlockHistoryByBlockId($block['id']);
        $this->getBlockDao()->deleteBlock($block['id']);

        return $this->getBlockTemplateDao()->deleteBlockTemplate($id);
    }

    public function getBlockTemplateByCode($code)
    {
        return $this->getBlockTemplateDao()->getBlockTemplateByCode($code);
    }

    public function updateBlockTemplate($id, $fields)
    {
        $blockTemplate = $this->getBlockTemplateDao()->getBlockTemplate($id);

        if (!$blockTemplate) {
            throw $this->createServiceException($this->getKernel()->trans('此编辑区模板不存在，更新失败!'));
        }
        $fields['updateTime'] = time();
        $updatedBlockTemplate = $this->getBlockTemplateDao()->updateBlockTemplate($id, $fields);

        $this->getLogService()->info('blockTemplate', 'update_block_template', "更新编辑区模板#{$id}");

        return $updatedBlockTemplate;
    }

    public function searchBlockTemplateCount($condition)
    {
        return $this->getBlockTemplateDao()->searchBlockTemplateCount($condition);
    }

    public function searchBlockTemplates($conditions, $orderBy, $start, $limit)
    {
        return $this->getBlockTemplateDao()->searchBlockTemplates($conditions, $orderBy, $start, $limit);
    }

    protected function getBlockTemplateDao()
    {
        return $this->createDao('Content.BlockTemplateDao');
    }

    protected function getBlockDao()
    {
        return $this->createDao('Content.BlockDao');
    }

    protected function getBlockHistoryDao()
    {
        return $this->createDao('Content.BlockHistoryDao');
    }

    protected function getLogService()
    {
        return $this->createService('System.LogService');
    }

    protected function getSettingService()
    {
        return $this->createService('System.SettingService');
    }
}
