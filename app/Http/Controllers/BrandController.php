<?php

namespace App\Http\Controllers;

use App\Http\Requests\BrandRequest;
use App\Models\Manager\BrandManagerInterface;
use App\Models\Models\Brand;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class BrandController extends Controller{
       public function index(BrandManagerInterface $brandManager){
        // recuperer tous les brands        
        // entre ici MODEL de MVC
        $brand = $brandManager->getAllBrands();
        // et ici 
        return view('listeBrand')->with(['brand' => $brand]);
    }

     public function form(){
        return view('formBrand');
    }

    public function formUpdate(BrandManagerInterface $brandManager, $id){
        $brand = $brandManager->getBrandById($id);
        return view('formBrand')->with([
            "brand" => $brand
        ]);
    }

       public function create(BrandRequest $request, BrandManagerInterface $brandManager){
        $brandName = $request->input('brand');

        $brandName = new Brand();
        $brandName->setName($brandName);
        $brandManager->createBrand($brandName);
              
        return redirect('/');

    }

    public function update(BrandRequest $request, BrandManagerInterface $brandManager, $id){
        $brand = new Brand();
        $brand->setId($id);
        $brand->setName($request->input("brand"));
        $brandManager->updateBrand($brand);

       
        return redirect('/brand/' . $brand->getId() . '/edit');
    }


    public function delete(BrandManagerInterface $brandManager, $id){
        $brandManager->deleteBrandById($id);
        return redirect('/');
    }

    public function allJson(BrandManagerInterface $brandManager){        
        // recuperer tous les brands        
        // entre ici MODEL de MVC
        $brand = $brandManager->getAllBrands();
        // et ici 
        return response()->json($brand);
    }   
    
}

