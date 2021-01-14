<?php

namespace App\Providers;

use App\Models\dao\BrandDaoImpl;
use App\Models\Dao\BrandDaoInterface;
use App\Models\dao\CategoryDaoImpl;
use App\Models\Dao\CategoryDaoInterface;
use App\Models\dao\ComplexRequestDaoImpl;
use App\Models\Dao\ComplexRequestDaoInterface;
use App\Models\Dao\LoginDaoInterface;
use App\Models\Dao\ProductDaoImpl;
use App\Models\Dao\ProductDaoInterface;
use App\Models\Dao\StockDaoImpl;
use App\Models\Dao\StockDaoInterface;
use App\Models\Dao\StoreDaoImpl;
use App\Models\Dao\StoreDaoInterface;
use App\Models\Manager\BrandManagerImpl;
use App\Models\Manager\BrandManagerInterface;
use App\Models\Manager\CategoryManagerImpl;
use App\Models\Manager\CategoryManagerInterface;
use App\Models\Manager\LoginManagerImpl;
use App\Models\Manager\LoginManagerInterface;
use App\Models\Manager\ProductManagerImpl;
use App\Models\Manager\ProductManagerInterface;
use App\Models\Manager\StockManagerImpl;
use App\Models\Manager\StockManagerInterface;
use App\Models\Manager\StoreManagerImpl;
use App\Models\Manager\StoreManagerInterface;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Models\Dao\LoginDaoImpl;
use App\Models\Manager\ComplexRequestManagerImpl;
use App\Models\Manager\ComplexRequestManagerInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(BrandManagerInterface::class, BrandManagerImpl::class);
        $this->app->bind(BrandDaoInterface::class, BrandDaoImpl::class);
        $this->app->bind(CategoryDaoInterface::class, CategoryDaoImpl::class);
        $this->app->bind(CategoryManagerInterface::class, CategoryManagerImpl::class);
        $this->app->bind(ProductDaoInterface::class, ProductDaoImpl::class);
        $this->app->bind(ProductManagerInterface::class, ProductManagerImpl::class);
        $this->app->bind(StockDaoInterface::class, StockDaoImpl::class);
        $this->app->bind(StockManagerInterface::class, StockManagerImpl::class);
        $this->app->bind(LoginDaoInterface::class, LoginDaoImpl::class);
        $this->app->bind(LoginManagerInterface::class, LoginManagerImpl::class);
        $this->app->bind(StoreDaoInterface::class, StoreDaoImpl::class);
        $this->app->bind(StoreManagerInterface::class, StoreManagerImpl::class);
        $this->app->bind(ComplexRequestDaoInterface::class, ComplexRequestDaoImpl::class);
        $this->app->bind(ComplexRequestManagerInterface::class, ComplexRequestManagerImpl::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }
}


