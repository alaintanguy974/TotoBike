<?php

namespace App\Models\Manager;

use App\Exceptions\BrandException;
use App\Models\Dao\BrandDaoInterface;
use App\Models\Manager\BrandManagerInterface;
use App\Models\Models\Brand;

class BrandManagerImpl implements BrandManagerInterface{

    private $brandDao;

    public function __construct(BrandDaoInterface $brandDao){
        $this->brandDao = $brandDao;
    }

    public function getAllBrands(){
        return $this->brandDao->getAllBrands();
    }
   
    public function createBrand(Brand $brand){
        $this->brandDao->createBrand($brand);
    }

    public function getBrandById($id){
        return $this->brandDao->getBrandById($id);
    }

    public function updateBrand(Brand $brand){
        $this->brandDao->updateBrand($brand);
    }

    public function deleteBrandById($id){
        if($this->brandManagerInterface->countBrandWithBrandId($id) == 0){
            $this->brandDao->deleteBrandById($id);
        }else{
            throw new BrandException();
        }
    }
    
}