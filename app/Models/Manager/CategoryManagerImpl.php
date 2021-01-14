<?php

namespace App\Models\Manager;

use App\Exceptions\CategoryException;
use App\Models\Dao\CategoryDaoInterface;
use App\Models\Manager\CategoryManagerInterface;
use App\Models\Models\Category;

class CategoryManagerImpl implements CategoryManagerInterface
{

    private $categoryDao;
    private $productManagerInterface;

    public function __construct(CategoryDaoInterface $categoryDao, ProductManagerInterface $productManagerInterface){
        $this->categoryDao = $categoryDao;
        $this->productManagerInterface = $productManagerInterface;
    }

    public function getAllCategories(){
        return $this->categoryDao->getAllCategories();
    }

    public function createCategory(Category $cat){
        $this->categoryDao->createCategory($cat);
    }

    public function getCategoryById($id){
        return $this->categoryDao->getCategoryById($id);
    }

    public function updateCategory(Category $cat){
        $this->categoryDao->updateCategory($cat);
    }

    public function deleteCategoryById($id){
        if($this->productManagerInterface->countProductWithCategoryId($id) == 0){
            $this->categoryDao->deleteCategoryById($id);
        }else{
            throw new CategoryException();
        }
    }
}
