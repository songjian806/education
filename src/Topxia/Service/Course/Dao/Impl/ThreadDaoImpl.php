<?php

namespace Topxia\Service\Course\Dao\Impl;

use Topxia\Service\Common\BaseDao;
use Topxia\Service\Course\Dao\ThreadDao;

class ThreadDaoImpl extends BaseDao implements ThreadDao
{
    protected $table = 'course_thread';

    public function getThread($id)
    {
        $that = $this;

        return $this->fetchCached("id:{$id}", $id, function ($id) use ($that) {
            $sql = "SELECT * FROM {$that->getTable()} WHERE id = ? LIMIT 1";

            return $that->getConnection()->fetchAssoc($sql, array($id)) ?: null;
        });
    }

    public function findLatestThreadsByType($type, $start, $limit)
    {
        $that = $this;

        return $this->fetchCached("type:{$type}:start:{$start}:limit:{$limit}", $type, $start, $limit, function ($type, $start, $limit) use ($that) {
            $sql = "SELECT * FROM {$that->getTable()} WHERE type = ? ORDER BY createdTime DESC LIMIT {$start}, {$limit}";

            return $that->getConnection()->fetchAll($sql, array($type)) ?: array();
        });
    }

    public function findEliteThreadsByType($type, $status, $start, $limit)
    {
        $that = $this;

        return $this->fetchCached("type:{$type}:status:{$status}:start:{$start}:limit:{$limit}", $type, $status, $start, $limit, function ($type, $status, $start, $limit) use ($that) {
            $sql = "SELECT * FROM {$that->getTable()} WHERE type = ? AND isElite = ? ORDER BY createdTime DESC LIMIT {$start}, {$limit}";

            return $that->getConnection()->fetchAll($sql, array($type, $status)) ?: array();
        });
    }

    public function findThreadsByUserIdAndType($userId, $type)
    {
        $that = $this;

        return $this->fetchCached("userId:{$userId}:type:{$type}", $userId, $type, function ($userId, $type) use ($that) {
            $sql = "SELECT * FROM {$that->getTable()} WHERE userId = ? AND type = ? ORDER BY createdTime DESC";

            return $that->getConnection()->fetchAll($sql, array($userId, $type));
        });
    }

    public function findThreadsByCourseId($courseId, $orderBy, $start, $limit)
    {
        $this->filterStartLimit($start, $limit);
        // @todo: fixed me.
        $orderBy = implode(' ', $orderBy);
        $sql     = "SELECT * FROM {$this->table} WHERE courseId = ? ORDER BY {$orderBy} LIMIT {$start}, {$limit}";

        return $this->getConnection()->fetchAll($sql, array($courseId)) ?: array();
    }

    public function findThreadsByCourseIdAndType($courseId, $type, $orderBy, $start, $limit)
    {
        $this->filterStartLimit($start, $limit);
        // @todo: fixed me.
        $orderBy = implode(' ', $orderBy);
        $sql     = "SELECT * FROM {$this->table} WHERE courseId = ? AND type = ? ORDER BY {$orderBy} LIMIT {$start}, {$limit}";

        return $this->getConnection()->fetchAll($sql, array($courseId, $type)) ?: array();
    }

    public function searchThreads($conditions, $orderBys, $start, $limit)
    {
        $this->filterStartLimit($start, $limit);
        $builder = $this->createThreadSearchQueryBuilder($conditions)
            ->select('*')
            ->setFirstResult($start)
            ->setMaxResults($limit);

        foreach ($orderBys as $orderBy) {
            $builder->addOrderBy($orderBy[0], $orderBy[1]);
        }
        $builder->getSQL();
        return $builder->execute()->fetchAll() ?: array();
    }

    public function searchThreadCount($conditions)
    {
        $builder = $this->createThreadSearchQueryBuilder($conditions)
            ->select('COUNT(id)');

        return $builder->execute()->fetchColumn(0);
    }

    public function searchThreadCountInCourseIds($conditions)
    {
        $builder = $this->createThreadSearchQueryBuilder($conditions)
            ->select('COUNT(id)');

        return $builder->execute()->fetchColumn(0);
    }

    public function searchThreadInCourseIds($conditions, $orderBys, $start, $limit)
    {
        $this->filterStartLimit($start, $limit);
        $builder = $this->createThreadSearchQueryBuilder($conditions)
            ->select('*')
            ->setFirstResult($start)
            ->setMaxResults($limit);

        foreach ($orderBys as $orderBy) {
            $builder->addOrderBy($orderBy[0], $orderBy[1]);
        }

        return $builder->execute()->fetchAll() ?: array();
    }

    public function findThreadsCountByCourseId($courseId)
    {
        $that = $this;

        return $this->fetchCached("courseId:{$courseId}", $courseId, function ($courseId) use ($that) {
            $sql = "SELECT COUNT(*) FROM {$that->getTable()} WHERE courseId = ? ";

            return $that->getConnection()->fetchColumn($sql, array($courseId));
        });
    }

    protected function createThreadSearchQueryBuilder($conditions)
    {
        if (isset($conditions['title'])) {
            $conditions['title'] = "%{$conditions['title']}%";
        }

        if (isset($conditions['content'])) {
            $conditions['content'] = "%{$conditions['content']}%";
        }

        $builder = $this->createDynamicQueryBuilder($conditions)
            ->from($this->table, $this->table)
            ->andWhere('updatedTime >= :updatedTime_GE')
            ->andWhere('courseId = :courseId')
            ->andWhere('lessonId = :lessonId')
            ->andWhere('userId = :userId')
            ->andWhere('type = :type')
            ->andWhere('type IN (:types)')
            ->andWhere('isStick = :isStick')
            ->andWhere('isElite = :isElite')
            ->andWhere('postNum = :postNum')
            ->andWhere('postNum > :postNumLargerThan')
            ->andWhere('title LIKE :title')
            ->andWhere('content LIKE :content')
            ->andWhere('courseId IN (:courseIds)')
            ->andWhere('private = :private')
            ->andWhere('createdTime >= :startCreatedTime')
            ->andWhere('createdTime < :endCreatedTime');

        return $builder;
    }

    public function addThread($fields)
    {
        $fields['createdTime'] = time();
        $fields['updatedTime'] = $fields['createdTime'];

        $affected = $this->getConnection()->insert($this->table, $fields);
        $this->clearCached();
        if ($affected <= 0) {
            throw $this->createDaoException('Insert course thread error.');
        }

        return $this->getThread($this->getConnection()->lastInsertId());
    }

    public function updateThread($id, $fields)
    {
        $fields['updatedTime'] = time();
        $this->getConnection()->update($this->table, $fields, array('id' => $id));
        $this->clearCached();
        return $this->getThread($id);
    }

    public function deleteThread($id)
    {
        $result = $this->getConnection()->delete($this->table, array('id' => $id));
        $this->clearCached();
        return $result;
    }

    public function waveThread($id, $field, $diff)
    {
        $fields = array('postNum', 'hitNum', 'followNum');

        if (!in_array($field, $fields)) {
            throw \InvalidArgumentException(sprintf($this->getKernel()->trans('%s字段不允许增减，只有%s才被允许增减'), $field, implode(',', $fields)));
        }

        $currentTime = time();
        $sql         = "UPDATE {$this->table} SET {$field} = {$field} + ?, updatedTime = {$currentTime} WHERE id = ? LIMIT 1";

        $result = $this->getConnection()->executeQuery($sql, array($diff, $id));
        $this->clearCached();
        return $result;
    }
}
