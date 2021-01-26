<?php

namespace App\Models\Dao;

interface StoreDaoInterface
{
    public function getAllStores();
    public function getStoreById($id);
}
