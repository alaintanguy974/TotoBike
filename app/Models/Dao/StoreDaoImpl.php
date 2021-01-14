<?php

namespace App\Models\Dao;

use App\Models\Dao\StoresDaoInterface;
use App\Models\Models\Store;
use Illuminate\Support\Facades\DB;

class StoreDaoImpl implements StoreDaoInterface{

     public function getStoreById($id){
        $resultbdd = DB::select("select * from sales.stores where store_id=?", [$id]);

        $store = new Store();
        $store->setId($resultbdd[0]->store_id);
        $store->setName($resultbdd[0]->store_name);

        return $store;
    }
  

    public function getAllStores(){
        $resultbdd = DB::select("exec get_all_stores");

        $allStores = [];
        foreach($resultbdd as $i => $row){
            $store = new Store();
            $store->setId($row->store_id);
            $store->setName($row->store_name);
            $store->setPhone($row->phone);
            $store->setEmail($row->email);            
            $store->setStreet($row->street);
            $store->setCity($row->city);
            $store->setState($row->state);
            $store->setZipCode($row->zip_code);

            array_push($allStores, $store);
        }

        return $allStores;
    }    
}