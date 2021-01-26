<?php

namespace App\Models\Manager;

use App\Models\Dao\StoreDaoInterface;
use App\Models\Manager\StoreManagerInterface;

class StoreManagerImpl implements StoreManagerInterface
{

    private $storeDao;

    public function __construct(StoreDaoInterface $storeDao)
    {
        $this->storeDao = $storeDao;
    }

    public function getStoreById($id)
    {
        return $this->storeDao->getStoreById($id);
    }

    public function getAllStores()
    {
        return $this->storeDao->getAllStores();
    }
}
    
