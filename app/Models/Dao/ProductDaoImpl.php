<?php

namespace App\Models\Dao;

use App\Models\Dao\BrandDaoInterface;
use App\Models\Dao\CategoryDaoInterface;
use App\Models\Dao\ProductDaoInterface;
use App\Models\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductDaoImpl implements ProductDaoInterface{

    private $categoryDao;
    private $brandDao;

    public function __construct(CategoryDaoInterface $catDao, BrandDaoInterface $brandDao)
    {
        $this->categoryDao = $catDao;
        $this->brandDao = $brandDao;
    }

    public function getAllproducts(){
        $resultbdd = DB::select("SELECT * FROM production.products");
 
        $allProducts = [];
        foreach($resultbdd as $i => $row){
            $product = new Product();
            $product->setId($row->product_id);
            $product->setName($row->product_name);
            $product->setYear($row->model_year);
            $product->setPrice($row->list_price);

            $category = $this->categoryDao->getCategoryById($row->category_id);
            $brand = $this->brandDao->getBrandById($row->brand_id);


            $product->setCategory($category);
            $product->setBrand($brand);

            array_push($allProducts, $product);
        }

        return $allProducts;
    }

    public function getProductById($id){
        $bdd = DB::getPdo();
        $reponse = $bdd->query("SELECT * FROM production.products WHERE product_id = '".$id."'");
        $resultbdd = $reponse->fetch();

        $product = new Product();
        $product->setId($resultbdd['product_id']);
        $product->setName($resultbdd['product_name']);
        $product->setYear($resultbdd['model_year']);
        $product->setPrice($resultbdd['list_price']);

        $category = $this->categoryDao->getCategoryById($resultbdd['category_id']);
        $brand = $this->brandDao->getBrandById($resultbdd['brand_id']);
       

        $product->setCategory($category);
        $product->setBrand($brand);
        

        return $product;
    }

    public function countProductWithCategoryId($id){
        return DB::select("select count(*) as count from production.products where category_id=".$id)[0]->count;
    }

    public function countProductWithBrandId($id){
        return DB::select("select count(*) as count from production.products where brand_id=".$id)[0]->count;
    }

    public function createProduct(Product $product){
        $resultbdd = DB::insert("INSERT INTO production.products (product_name, model_year, list_price) values(?,?,?)",[$product->getName(), $product->getYear(),$product->getPrice()]);
    }

    public function updateProduct(Product $product){
        $resultbdd = DB::update("UPDATE production.products set product_name, model_year, list_price = (?, ? ,?)
         WHERE product_id = ?", [$product->getName(),$product->getYear(), $product->getPrice(), $product->getId()]);
    }
  
    public function deleteProductById($id){
        $resultbdd = DB::delete("DELETE FROM production.products WHERE product_id = ?", [$id]);
    }
}
