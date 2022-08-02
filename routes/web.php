<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CityController;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/products', [ProductController::class, 'get_all_products']);
Route::get('/product/{id}',[ProductController::class, "product_details"] );
Route::get('/cart', [CartController::class, 'get']);

/* ----------------Admin---------------- */
Route::get('/admin', [AdminController::class, 'index']);

Route::get('/admin/cities', [CityController::class, 'get_all']);
Route::get('/admin/cities/add', [CityController::class, 'add_get']);
Route::post('/admin/cities/add', [CityController::class, 'add_post']);
Route::get('/admin/cities/edit/{id}', [CityController::class, 'edit_get']);
Route::post('/admin/cities/edit/{id}', [CityController::class, 'edit_post']);
Route::post('/admin/cities/delete/{id}', [CityController::class, 'delete']);

Route::get('/admin/products', [ProductController::class, 'admin_get_all_products']);
