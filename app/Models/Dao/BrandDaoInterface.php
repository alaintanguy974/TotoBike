<?php

namespace App\Models\Dao;

use App\Models\Models\Brand;

interface BrandDaoInterface {

    public function getAllBrands();
    public function getBrandById($id);
    public function deleteBrandById($id);
    public function createBrand(Brand $brand);
    public function updateBrand(Brand $brand);         
}