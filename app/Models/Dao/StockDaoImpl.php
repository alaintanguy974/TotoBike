<?php

namespace App\Models\Dao;

use App\Models\Models\Stock;
use Illuminate\Support\Facades\DB;

class StockDaoImpl implements StockDaoInterface{


    private $produitDao;
    private $storeDao;

    public function __construct(ProductDaoInterface $produitDao, StoreDaoInterface $storeDao ){
        $this->produitDao = $produitDao;
        $this->storeDao = $storeDao;
    }

    public function getAllStocks(){
        $bdd = DB::getPdo();
        $reponse = $bdd->query("SELECT * FROM production.stocks");
        $resultbdd = $reponse->fetchAll();

        $allBrands = [];
        foreach($resultbdd as $i => $row){
            $stock = new Stock();
            $stock->setQuantity($row['quantity']);
            
            $produit = $this->produitDao->getProductById($row['product_id']);
            $stock->setProduct($produit);

             $store = $this->storeDao->getStoreById($row['store_id']);
            $stock->setStore($store);

            array_push($allBrands, $stock);
        }

        return $allBrands;
    }
    
}
