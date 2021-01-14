<?php

namespace App\Models\Dao;

use App\Models\Models\Category;

interface CategoryDaoInterface{
    public function getAllCategories();
    public function getCategoryById($id);
    public function deleteCategoryById($id);
    public function createCategory(Category $cat);
    public function updateCategory(Category $cat);
    
}
