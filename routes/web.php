<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ComplexRequestController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*Route::get('/', function () {
    return view('welcome');
});*/
//Route::get('/brand', [LoginController::class, 'index']);

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'login']);

Route::group(['middleware' => ['is_connected']], function(){
 Route::get('/', [HomeController::class, 'index']);
});

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/json/brand-cat', [ComplexRequestController::class, 'getBrandQuantityByCategoryJson']);


Route::get('/brand/create', [BrandController::class, 'form']);
Route::post('/brand/create', [BrandController::class, 'create']);
Route::get('/brand/{id}/edit', [BrandController::class, 'formUpdate']);
Route::post('/brand/{id}/edit', [BrandController::class, 'update']);
Route::get('/brand/{id}/delete', [BrandController::class, 'delete']);
Route::get('/brand/json', [BrandController::class, 'allJson']);

Route::get('/category/create', [CategoryController::class, 'form']);
Route::post('/category/create', [CategoryController::class, 'create']);
Route::get('/category/{id}/edit', [CategoryController::class, 'formUpdate']);
Route::post('/category/{id}/edit', [CategoryController::class, 'update']);
Route::get('/category/{id}/delete', [CategoryController::class, 'delete']);
Route::get('/category/json', [CategoryController::class, 'allJson']);

Route::get('/product/create', [HomeController::class, 'form']);
Route::post('/product/create', [HomeController::class, 'create']);
Route::get('/product/{id}/edit', [HomeController::class, 'formUpdate']);
Route::post('/product/{id}/edit', [HomeController::class, 'update']);
Route::get('/product/{id}/delete', [HomeController::class, 'delete']);

Route::get('/stock/create', [HomeController::class, 'form']);
Route::post('/stock/create', [HomeController::class, 'create']);
Route::get('/stock/{id_store}/{product_id}/edit', [HomeController::class, 'formUpdate']);
Route::post('/stock/{id_store}/{product_id}/edit', [HomeController::class, 'update']);
Route::get('/stock/{id_store}/{product_id}/delete', [HomeController::class, 'delete']);


//Auth::routes();

