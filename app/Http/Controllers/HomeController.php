<?php

namespace App\Http\Controllers;


use App\Models\Manager\BrandManagerInterface;
use App\Models\Manager\CategoryManagerInterface;
use App\Models\Manager\ProductManagerInterface;
use App\Models\Manager\StockManagerInterface;
use App\Models\Manager\StoreManagerInterface;



class HomeController extends Controller{

    public function index(
        ProductManagerInterface $productManager, 
    BrandManagerInterface $brandManager, 
    StockManagerInterface $stockManager, 
    CategoryManagerInterface $categoryManager,
    StoreManagerInterface $storeManager){

       
        $allBrands = $brandManager->getAllBrands();
        $allProducts = $productManager->getAllProducts();
        $allStocks = $stockManager->getAllStocks();
        $allCategories = $categoryManager->getAllCategories();
        $allStores =  $storeManager->getAllStores();

        return view('home')->with([
            "brand" => $allBrands,
            "product" => $allProducts,            
            "stock" => $allStocks,
            "category" => $allCategories,
            "store" => $allStores,
        ]);
    }    
}