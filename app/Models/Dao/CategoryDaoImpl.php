<?php

namespace App\Models\dao;

use App\Models\Dao\CategoryDaoInterface;
use App\Models\Dao\ProductInterface;
use App\Models\Models\Category;
use Illuminate\Support\Facades\DB;

class CategoryDaoImpl implements CategoryDaoInterface{

    public function getAllCategories(){
        $resultbdd = DB::select("exec get_all_categories");

        $allCategories = [];
        foreach($resultbdd as $i => $row){
            $category = new Category();
            $category->setId($row->category_id);
            $category->setName($row->category_name);

            array_push($allCategories, $category);
        }

        return $allCategories;
    }

   
    public function getCategoryById($id){
        
        $resultbdd = DB::select("exec get_category_by_id @id=".$id);

        $category = new Category();
        $category->setId($resultbdd[0]->category_id);
        $category->setName($resultbdd[0]->category_name);

        return $category;
    }

    public function createCategory(Category $cat){
        $resultbdd = DB::insert("INSERT INTO production.categories (category_name) values(?)", [$cat->getName()]);
    }

    public function updateCategory(Category $cat){
        $resultbdd = DB::update("UPDATE production.categories set category_name = ? WHERE category_id = ?", [$cat->getName(), $cat->getId()]);
    }

    public function deleteCategoryById($id){
        $resultbdd = DB::delete("DELETE FROM production.categories WHERE category_id = ?", [$id]);
    }    
}
