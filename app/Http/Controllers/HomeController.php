<?php

namespace App\Http\Controllers;

use App\Exceptions\BrandException;
use App\Models\Manager\BrandManagerInterface;
use App\Models\Manager\CategoryManagerInterface;
use App\Models\Manager\ProductManagerInterface;
use App\Models\Manager\StockManagerInterface;
use App\Models\Manager\StoreManagerInterface;
use App\Models\Manager\StaffManagerInterface;



class HomeController extends Controller{

    public function index(
        ProductManagerInterface $productManager, 
    BrandManagerInterface $brandManager, 
    StockManagerInterface $stockManager, 
    CategoryManagerInterface $categoryManager,
    StoreManagerInterface $storeManager,
    StaffManagerInterface $staffManager){

       
        $allBrands = $brandManager->getAllBrands();
        $allProducts = $productManager->getAllProducts();
        $allStocks = $stockManager->getAllStocks();
        $allCategories = $categoryManager->getAllCategories();
        $allStores =  $storeManager->getAllStores();
        $allStaffs =  $staffManager->getAllStaffs();

        return view('home')->with([
            "brand" => $allBrands,
            "product" => $allProducts,            
            "stock" => $allStocks,
            "category" => $allCategories,
            "store" => $allStores,
            "staff" => $allStaffs,
        ]);
    }

}