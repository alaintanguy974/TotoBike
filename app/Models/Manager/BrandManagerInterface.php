<?php

namespace App\Models\Manager;

use App\Models\Models\Brand;

interface BrandManagerInterface{

    public function getAllBrands();
    public function getBrandById($id);
    public function deleteBrandById($id);
    public function createBrand(Brand $brand);
    public function updateBrand(Brand $brand);  
    
    
}