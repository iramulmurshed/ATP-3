<?php

use App\Http\Controllers\ProductController;
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

Route::get('/', [ProductController::class,'showHomePage'])->name('home');
Route::get('/product-list', [ProductController::class,'productList'])->name('productList');
Route::get('/add-product', [ProductController::class,'addProductPage'])->name('addProduct');
Route::get('/product-details/{id}', [ProductController::class,'showProductDetails'])->name('productDetails');
Route::get('/product-list/delete/{id}', [ProductController::class,'deleteProduct']);
Route::post('/add-product', [ProductController::class,'insertProduct'])->name('addProduct');
Route::get('/edit-product/{id}', [ProductController::class,'editProductPage'])->name('editProduct');
Route::post('/edit-product/{id}', [ProductController::class,'editProductDetails'])->name('editProduct');
