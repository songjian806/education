<?php
namespace AnywhereClient\Service\AnywhereServer;

interface AnywhereServerService
{
    public function getAnywhereServer($id);

    public function searchAnywhereServers(array $conditions, $sort, $start, $limit);

    public function searchAnywhereServersCount($conditions);

    public function createAnywhereServer($fields);

    public function updateAnywhereServer($id, $fields);

    public function deleteAnywhereServer($id);
}
