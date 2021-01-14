<?php

namespace App\Models\Dao;

use App\Models\Models\Product;

interface ProductDaoInterface{
    public function getAllProducts();
    public function countProductWithCategoryId($id);
    public function countProductWithBrandId($id);
    public function getProductById($id);
    public function deleteProductById($id);
    public function createProduct(Product $product);
    public function updateProduct(Product $product);
    
        
}