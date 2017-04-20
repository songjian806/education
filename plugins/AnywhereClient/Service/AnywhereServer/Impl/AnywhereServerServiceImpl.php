<?php
namespace AnywhereClient\Service\AnywhereServer\Impl;

use Topxia\Service\Common\BaseService;
use AnywhereClient\Service\AnywhereServer\AnywhereServerService;
use Topxia\Common\ArrayToolkit;

class AnywhereServerServiceImpl extends BaseService implements AnywhereServerService
{
    public function getAnywhereServer($id)
    {
        return $this->getAnywhereServerDao()->getAnywhereServer($id);
    }

    public function searchAnywhereServers(array $conditions, $orderBys, $start, $limit)
    {
        return $this->getAnywhereServerDao()->searchAnywhereServers($conditions, $orderBys, $start, $limit);
    }

    public function searchAnywhereServersCount($conditions)
    {
        return $this->getAnywhereServerDao()->searchAnywhereServersCount($conditions);
    }

    public function createAnywhereServer($fields)
    {
        if (!ArrayToolkit::requireds($fields, array('serverName', 'serverUrl', 'clientId', 'secretKey'))) {
            throw $this->createServiceException('缺少必要字段，创建失败！');
        }

        $fields = ArrayToolkit::parts($fields, array('serverName', 'serverUrl', 'clientId', 'secretKey', 'enabled'));
        $fields['createdTime'] = time();

        return $this->getAnywhereServerDao()->createAnywhereServer($fields);
    }

    public function updateAnywhereServer($id, $fields)
    {
        return $this->getAnywhereServerDao()->updateAnywhereServer($id, $fields);
    }

    public function deleteAnywhereServer($id)
    {
        return $this->getAnywhereServerDao()->deleteAnywhereServer($id);
    }

    private function getAnywhereServerDao()
    {
        return $this->createDao('AnywhereClient:AnywhereServer.AnywhereServerDao');
    }
}
