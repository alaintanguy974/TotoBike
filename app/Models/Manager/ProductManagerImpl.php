<?php

namespace App\Models\Manager;


use App\Models\Dao\ProductDaoInterface;
use App\Models\Manager\ProductManagerInterface;

class ProductManagerImpl implements ProductManagerInterface{

    private $productDao;


    public function __construct(ProductDaoInterface $productDao){
        $this->productDao = $productDao;
    }
    

    public function getAllProducts(){
        return $this->productDao->getAllProducts();    
    }

    public function getProductById($id){
        return $this->productDao->getProductById($id);
    }

    public function countProductWithCategoryId($id){
        return $this->productDao->countProductWithCategoryId($id);    
    }

    public function countProductWithBrandId($id){
        return $this->productDao->countProductWithBrandId($id);    
    }

    public function createProduct( $product){
         $this->productDao->createProduct( $product);     
    }   

    public function updateProduct( $product){
         $this->productDao->updateProduct($product);
    }

   public function deleteProductById($id){
        $this->productDao->deleteProductById($id);        
    }
}
