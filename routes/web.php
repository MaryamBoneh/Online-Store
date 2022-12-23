<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\UserController;

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
Route::get('/products', [ProductController::class, 'get_all_for_client']);
Route::get('/product/{id}', [ProductController::class, "product_details"] );
Route::post('/send-rating', [ProductController::class, 'add_rating']);
Route::get('/cart', [CartController::class, 'get'])->middleware("auth");
Route::post('/add-to-cart', [CartController::class, 'add'])->middleware("auth");
Route::get('/login', [UserController::class, 'login_get']);
Route::post('/login', [UserController::class, 'login_post']);
Route::get('/register', [UserController::class, 'register_get']);
Route::post('/register', [UserController::class, 'register_post']);
Route::post('/logout', [UserController::class, 'logout']);

/* ----------------Admin---------------- */
Route::get('/admin', [AdminController::class, 'index']);

Route::get('/admin/cities', [CityController::class, 'get_all']);
Route::get('/admin/cities/add', [CityController::class, 'add_get']);
Route::post('/admin/cities/add', [CityController::class, 'add_post']);
Route::get('/admin/cities/edit/{id}', [CityController::class, 'edit_get']);
Route::post('/admin/cities/edit/{id}', [CityController::class, 'edit_post']);
Route::post('/admin/cities/delete/{id}', [CityController::class, 'delete']);

Route::get('/admin/products', [ProductController::class, 'get_all_for_admin']);
Route::get('/admin/products/add', [ProductController::class, 'add_get']);
Route::post('/admin/products/add', [ProductController::class, 'add_post']);
Route::get('/admin/products/edit/{id}', [ProductController::class, 'edit_get']);
Route::post('/admin/products/edit/{id}', [ProductController::class, 'edit_post']);
Route::post('/admin/products/delete/{id}', [ProductController::class, 'delete']);



Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});