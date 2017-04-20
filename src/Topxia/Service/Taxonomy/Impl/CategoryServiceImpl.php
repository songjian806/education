<?php
namespace Topxia\Service\Taxonomy\Impl;

use Topxia\Common\TreeToolkit;
use Topxia\Common\ArrayToolkit;
use Topxia\Service\Common\BaseService;
use Topxia\Service\Taxonomy\CategoryService;

class CategoryServiceImpl extends BaseService implements CategoryService
{
    public function findCategoriesByGroupIdAndParentId($groupId, $parentId)
    {
        if (!isset($groupId) || !isset($parentId) || $groupId < 0 || $parentId < 0) {
            return array();
        }

        return $this->getCategoryDao()->findCategoriesByGroupIdAndParentId($groupId, $parentId);
    }

    public function getCategory($id)
    {
        if (empty($id)) {
            return null;
        }

        return $this->getCategoryDao()->getCategory($id);
    }

    public function getCategoryByCode($code)
    {
        return $this->getCategoryDao()->findCategoryByCode($code);
    }

    public function getCategoryTree($groupId)
    {
        $group = $this->getGroup($groupId);

        if (empty($group)) {
            throw $this->createServiceException($this->getKernel()->trans('分类Group #%id%，不存在', array('%id%' => $groupId)));
        }

        $prepare = function ($categories) {
            $prepared = array();

            foreach ($categories as $category) {
                if (!isset($prepared[$category['parentId']])) {
                    $prepared[$category['parentId']] = array();
                }

                $prepared[$category['parentId']][] = $category;
            }

            return $prepared;
        };
        $data       = $this->findCategories($groupId);
        $categories = $prepare($this->findCategories($groupId));

        $tree = array();
        $this->makeCategoryTree($tree, $categories, 0);

        return $tree;
    }

    public function getCategoryStructureTree($groupId)
    {
        return TreeToolkit::makeTree($this->getCategoryTree($groupId), 'weight');
    }

    public function sortCategories($ids)
    {
        foreach ($ids as $index => $id) {
            $this->updateCategory($id, array('weight' => $index + 1));
        }
    }

    public function findCategories($groupId)
    {
        $group = $this->getGroup($groupId);

        if (empty($group)) {
            throw $this->createServiceException($this->getKernel()->trans('分类Group #%id%，不存在', array('%id%' => $groupId)));
        }

        $magic = $this->getSettingService()->get('magic');

        if (isset($magic['enable_org']) && $magic['enable_org']) {
            $user  = $this->getCurrentUser();
            $orgId = !empty($user['org']) ? $user['org']['id'] : null;
            return $this->getCategoryDao()->findCategoriesByGroupIdAndOrgId($group['id'], $orgId);
        } else {
            return $this->getCategoryDao()->findCategoriesByGroupId($group['id']);
        }
    }

    public function findAllCategoriesByParentId($parentId)
    {
        return ArrayToolkit::index($this->getCategoryDao()->findAllCategoriesByParentId($parentId), 'id');
    }

    public function findGroupRootCategories($groupCode)
    {
        $group = $this->getGroupByCode($groupCode);

        if (empty($group)) {
            throw $this->createServiceException($this->getKernel()->trans('分类Group #%code%，不存在', array('%code%' => $groupCode)));
        }

        return $this->getCategoryDao()->findCategoriesByGroupIdAndParentId($group['id'], 0);
    }

    public function findCategoryChildrenIds($id)
    {
        $category = $this->getCategory($id);

        if (empty($category)) {
            return array();
        }

        $tree = $this->getCategoryTree($category['groupId']);

        $childrenIds = array();
        $depth       = 0;

        foreach ($tree as $node) {
            if ($node['id'] == $category['id']) {
                $depth = $node['depth'];
                continue;
            }

            if ($depth > 0 && $depth < $node['depth']) {
                $childrenIds[] = $node['id'];
            }

            if ($depth > 0 && $depth >= $node['depth']) {
                break;
            }
        }

        return $childrenIds;
    }

    public function findCategoryBreadcrumbs($categoryId)
    {
        $breadcrumbs = array();
        $category    = $this->getCategory($categoryId);

        if (empty($category)) {
            return array();
        }

        $categoryTree = $this->getCategoryTree($category['groupId']);

        $indexedCategories = ArrayToolkit::index($categoryTree, 'id');

        while (true) {
            if (empty($indexedCategories[$categoryId])) {
                break;
            }

            $category      = $indexedCategories[$categoryId];
            $breadcrumbs[] = $category;

            if (empty($category['parentId'])) {
                break;
            }

            $categoryId = $category['parentId'];
        }

        return array_reverse($breadcrumbs);
    }

    public function makeNavCategories($code, $groupCode)
    {
        $rootCagoies = $this->findGroupRootCategories($groupCode);

        if (empty($code)) {
            return array($rootCagoies, array(), array());
        } else {
            $category    = $this->getCategoryByCode($code);
            $parentId    = $category['id'];
            $categories  = array();
            $activeIds   = array();
            $activeIds[] = $category['id'];
            $level       = 1;

            while ($parentId) {
                $activeIds[] = $parentId;
                $sibling     = $this->findAllCategoriesByParentId($parentId);

                if ($sibling) {
                    $categories[$level] = $sibling;
                    $level++;
                }

                $parent   = $this->getCategory($parentId);
                $parentId = $parent['parentId'];
            }

            $categories = array_reverse($categories);
            return array($rootCagoies, $categories, $activeIds);
        }
    }

    public function findCategoriesByIds(array $ids)
    {
        return ArrayToolkit::index($this->getCategoryDao()->findCategoriesByIds($ids), 'id');
    }

    public function findAllCategories()
    {
        return $this->getCategoryDao()->findAllCategories();
    }

    public function isCategoryCodeAvaliable($code, $exclude = null)
    {
        if (empty($code)) {
            return false;
        }

        if ($code == $exclude) {
            return true;
        }

        $category = $this->getCategoryDao()->findCategoryByCode($code);

        return $category ? false : true;
    }

    public function createCategory(array $category)
    {
        $category = ArrayToolkit::parts($category, array('description', 'name', 'code', 'groupId', 'parentId', 'icon'));

        if (!ArrayToolkit::requireds($category, array('name', 'code', 'groupId', 'parentId'))) {
            throw $this->createServiceException($this->getKernel()->trans('缺少必要参数，，添加分类失败'));
        }

        $this->filterCategoryFields($category);

        $category = $this->setCategoryOrg($category);
        $category = $this->getCategoryDao()->addCategory($category);

        $this->getLogService()->info('category', 'create', "添加分类 {$category['name']}(#{$category['id']})", $category);

        return $category;
    }

    protected function setCategoryOrg($category)
    {
        $magic = $this->getSettingService()->get('magic');

        if (empty($magic['enable_org'])) {
            return $category;
        }

        $user       = $this->getCurrentUser();
        $currentOrg = $user['org'];

        if (empty($category['parentId'])) {
            if (empty($user['org'])) {
                return $category;
            }
            $category['orgId']   = $currentOrg['id'];
            $category['orgCode'] = $currentOrg['orgCode'];
        } else {
            $parentOrg           = $this->getCategory($category['parentId']);
            $category['orgId']   = $parentOrg['orgId'];
            $category['orgCode'] = $parentOrg['orgCode'];
        }

        return $category;
    }

    public function updateCategory($id, array $fields)
    {
        $category = $this->getCategory($id);

        if (empty($category)) {
            throw $this->createNoteFoundException($this->getKernel()->trans('分类(#%id%)不存在，更新分类失败！', array('%id%' => $id)));
        }

        $fields = ArrayToolkit::parts($fields, array('description', 'name', 'code', 'weight', 'parentId', 'icon'));

        if (empty($fields)) {
            throw $this->createServiceException($this->getKernel()->trans('参数不正确，更新分类失败！'));
        }

        // filterCategoryFields里有个判断，需要用到这个$fields['groupId']
        $fields['groupId'] = $category['groupId'];

        $this->filterCategoryFields($fields, $category);

        $category = $this->getCategoryDao()->updateCategory($id, $fields);

        $this->getLogService()->info('category', 'update', "编辑分类 {$category['name']}(#{$id})", $fields);

        return $category;
    }

    public function deleteCategory($id)
    {
        $category = $this->getCategory($id);

        if (empty($category)) {
            throw $this->createNotFoundException();
        }

        $ids   = $this->findCategoryChildrenIds($id);
        $ids[] = $id;

        foreach ($ids as $id) {
            $this->getCategoryDao()->deleteCategory($id);
        }

        $this->getLogService()->info('category', 'delete', "删除分类{$category['name']}(#{$id})");
    }

    /**
     * group
     */
    public function getGroup($id)
    {
        return $this->getGroupDao()->getGroup($id);
    }

    public function getGroupByCode($code)
    {
        return $this->getGroupDao()->findGroupByCode($code);
    }

    public function getGroups($start, $limit)
    {
        return $this->getGroupDao()->findGroups($start, $limit);
    }

    public function findAllGroups()
    {
        return $this->getGroupDao()->findAllGroups();
    }

    public function addGroup(array $group)
    {
        return $this->getGroupDao()->addGroup($group);
    }

    public function deleteGroup($id)
    {
        return $this->getGroupDao()->deleteGroup($id);
    }

    protected function makeCategoryTree(&$tree, &$categories, $parentId)
    {
        static $depth = 0;
        static $leaf  = false;

        if (isset($categories[$parentId]) && is_array($categories[$parentId])) {
            foreach ($categories[$parentId] as $category) {
                $depth++;
                $category['depth'] = $depth;
                $tree[]            = $category;
                $this->makeCategoryTree($tree, $categories, $category['id']);
                $depth--;
            }
        }

        return $tree;
    }

    protected function filterCategoryFields(&$category, $releatedCategory = null)
    {
        foreach (array_keys($category) as $key) {
            switch ($key) {
                case 'name':
                    $category['name'] = (string) $category['name'];

                    if (empty($category['name'])) {
                        throw $this->createServiceException($this->getKernel()->trans('名称不能为空，保存分类失败'));
                    }

                    break;
                case 'code':
                    if (empty($category['code'])) {
                        throw $this->createServiceException($this->getKernel()->trans('编码不能为空，保存分类失败'));
                    } else {
                        if (!preg_match("/^[a-zA-Z0-9_]+$/i", $category['code'])) {
                            throw $this->createServiceException($this->getKernel()->trans('编码(%code%)含有非法字符，保存分类失败', array('%code%' => $category['code'])));
                        }

                        if (ctype_digit($category['code'])) {
                            throw $this->createServiceException($this->getKernel()->trans('编码(%code%)不能全为数字，保存分类失败', array('%code%' => $category['code'])));
                        }

                        $exclude = empty($releatedCategory['code']) ? null : $releatedCategory['code'];

                        if (!$this->isCategoryCodeAvaliable($category['code'], $exclude)) {
                            throw $this->createServiceException($this->getKernel()->trans('编码(%code%)不可用，保存分类失败', array('%code%' => $category['code'])));
                        }
                    }

                    break;
                case 'groupId':
                    $category['groupId'] = (int) $category['groupId'];
                    $group               = $this->getGroup($category['groupId']);

                    if (empty($group)) {
                        throw $this->createServiceException($this->getKernel()->trans('分类分组ID(%groupId%)不存在，保存分类失败', array('groupId' => $category['groupId'])));
                    }

                    break;
                case 'parentId':
                    $category['parentId'] = (int) $category['parentId'];

                    if ($category['parentId'] > 0) {
                        $parentCategory = $this->getCategory($category['parentId']);

                        if (empty($parentCategory) || $parentCategory['groupId'] != $category['groupId']) {
                            throw $this->createServiceException($this->getKernel()->trans('父分类(ID:%groupId%)不存在，保存分类失败', array('%groupId%' => $category['groupId'])));
                        }
                    }

                    break;
            }
        }

        return $category;
    }

    protected function getCategoryDao()
    {
        return $this->createDao('Taxonomy.CategoryDao');
    }

    protected function getGroupDao()
    {
        return $this->createDao('Taxonomy.CategoryGroupDao');
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
