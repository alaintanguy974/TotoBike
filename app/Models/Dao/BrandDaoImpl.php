<?php

namespace App\Models\dao;

use Exception;
use App\Models\Models\Brand;
use App\Exceptions\DaoException;
use App\Models\Dao\BrandDaoInterface;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class BrandDaoImpl implements BrandDaoInterface{

    public function getAllBrands(){

        $resultbdd = DB::select('exec dbo.get_all_brands');
        
        $allBrands = [];
        foreach($resultbdd as $i => $row){
            $brand = new Brand();
            $brand->setId($row->brand_id);
            $brand->setName($row->brand_name);

            array_push($allBrands, $brand);
        }

        return $allBrands;
    }
    public function getBrandById($id) : Brand{
            try{
            $bdd = DB::getPdo();
            $reponse = $bdd->query("SELECT * FROM production.brands WHERE brand_id='".$id."'");
            $resultbdd = $reponse->fetch();
    
            $brand = new Brand();
            $brand->setId($resultbdd['brand_id']);
            $brand->setName($resultbdd['brand_name']);
    
            return $brand;
            }catch(Exception $e){
            Log::error($e);
            throw new DaoException();
        }        
    }
        public function createBrand(Brand $brand){
        $resultbdd = DB::insert("INSERT INTO production.brands (brand_name) values(?)", [$brand->getName()]);
    }

    public function updateBrand(Brand $brand){
        $resultbdd = DB::update("UPDATE production.brands set brand_name = ? WHERE brand_id = ?", [$brand->getName(), $brand->getId()]);
    }

    public function deleteBrandById($id){
        $resultbdd = DB::delete("DELETE FROM production.brands WHERE brand_id = ?", [$id]);
    }
}

