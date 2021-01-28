<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Manager\BrandManagerInterface;
use App\Models\Manager\CategoryManagerInterface;
use App\Models\Models\Brand;
use App\Models\Models\Category;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class CategoryController extends Controller{
    public function index(CategoryManagerInterface $categoryManager){
                // entre ici MODEL de MVC
        $category = $categoryManager->getAllCategories();


        // et ici 
        return view('listeCategory')->with(['category' => $category]);

    }

    public function form(){
        return view('formCategory');
    }

    public function formUpdate(CategoryManagerInterface $categoryManager, $id){
        $category = $categoryManager->getCategoryById($id);
        return view('formCategory')->with([
            "category" => $category
        ]);
    }

    public function create(CategoryRequest $request, CategoryManagerInterface $categoryManager){
        $cat = $request->input('category');

        $cat = new Category();
        $cat->setName($cat);
        
        $categoryManager->createCategory($cat);
        return view('formCategory')->with(["category"=> $cat]);
       // return view('test')->with(["catval"=> $cat]);
        return redirect('/category'. $cat->getName() .'/create');

    }

    public function update(CategoryRequest $request, CategoryManagerInterface $categoryManager, $id){
        $cat = new Category();
        $cat->setId($id);
        $cat->setName($request->input("category"));
        $categoryManager->updateCategory($cat);
        //return view('test')->with(["catval"=> $cat]);
        return redirect('/category' . $cat->getId() . '/edit');
    }

    public function delete(CategoryManagerInterface $categoryManager, $id){
        $categoryManager->deleteCategoryById($id);
        return redirect('/');
    }
    
    public function allJson(CategoryManagerInterface $categoryManager){
        $category = $categoryManager->getAllCategories();
        return response()->json($category);
    }

}
