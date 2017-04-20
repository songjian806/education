<?php

namespace AnywhereClient\Service\AnywhereServer\Dao;

interface AnywhereServerDao
{
    public function getAnywhereServer($id);

    public function searchAnywhereServers($conditions, $orderBys, $start, $limit);

    public function searchAnywhereServersCount($conditions);

    public function createAnywhereServer($AnywhereServer);

    public function updateAnywhereServer($id, $AnywhereServer);

    public function deleteAnywhereServer($id);
}
