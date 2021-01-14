<?php

namespace App\Models\Manager;

use App\Models\Models\Category;

interface CategoryManagerInterface{
    public function getAllCategories();
    public function getCategoryById($id);
    public function deleteCategoryById($id);
    public function createCategory(Category $cat);
    public function updateCategory(Category $cat);
    

}

