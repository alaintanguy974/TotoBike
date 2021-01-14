<?php

namespace App\Models\Manager;

interface StoreManagerInterface{
    public function getAllStores();
    public function getStoreById($id);
}
