<?php
namespace AnywhereClient\Service\AnywhereServer\Dao\Impl;

use Topxia\Service\Common\BaseDao;
use AnywhereClient\Service\AnywhereServer\Dao\AnywhereServerDao;

class AnywhereServerDaoImpl extends BaseDao implements AnywhereServerDao
{
    protected $table = 'anywhere_server';

    public function getAnywhereServer($id)
    {
        $sql = "SELECT * FROM {$this->table} WHERE id = ? LIMIT 1";

        return $this->getConnection()->fetchAssoc($sql, array($id)) ?: null;
    }

    public function searchAnywhereServers($conditions, $orderBy, $start, $limit)
    {
        $this->filterStartLimit($start, $limit);
        $builder = $this->createAnywhereServerQueryBuilder($conditions)
            ->select('*')
            ->orderBy($orderBy[0], $orderBy[1])
            ->setFirstResult($start)
            ->setMaxResults($limit);

        return $builder->execute()->fetchAll() ?: array();
    }

    public function searchAnywhereServersCount($conditions)
    {
        $builder = $this->createAnywhereServerQueryBuilder($conditions)
            ->select('COUNT(id)');

        return $builder->execute()->fetchColumn(0);
    }

    private function createAnywhereServerQueryBuilder($conditions)
    {
        if (isset($conditions['serverName'])) {
            $conditions['serverName'] = "%{$conditions['serverName']}%";
        }

        return  $this->createDynamicQueryBuilder($conditions)
            ->from($this->table, 'anywhere_server')
            ->andWhere('serverName LIKE :serverName')
            ->andWhere('clientId = :clientId')
            ->andWhere('secretKey = :secretKey');
    }

    public function createAnywhereServer($AnywhereServer)
    {
        $affected = $this->getConnection()->insert($this->table, $AnywhereServer);
        if ($affected <= 0) {
            throw $this->createDaoException('Insert anywhere server error.');
        }

        return $this->getAnywhereServer($this->getConnection()->lastInsertId());
    }

    public function updateAnywhereServer($id, $fields)
    {
        $this->getConnection()->update($this->table, $fields, array('id' => $id));

        return $this->getAnywhereServer($id);
    }

    public function deleteAnywhereServer($id)
    {
        return $this->getConnection()->delete($this->table, array('id' => $id));
    }
}
