<?php

namespace App\Models\Manager;

use App\Models\Models\Product;

interface ProductManagerInterface{
    public function getAllProducts();
    public function getProductById($id);
    public function countProductWithCategoryId($id);
    public function countProductWithBrandId($id);
    public function deleteProductById($id);
    public function createProduct(Product $product);
    public function updateProduct(Product $product);
    
}