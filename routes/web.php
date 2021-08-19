<?php

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

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ProductController;

use Illuminate\Support\Facades\Route;

Route::get('users','UserController@getUsers');

Route::get('/',function(){

    return view('home');
});


/*PRODUCTS*/
Route::post('products/search',[ProductController::class,'search'])->name('products.search');
Route::resource('products', 'ProductController');
Route::view('test','product_detail');
Route::view('vue','testvue');


/***Login */

Route::post('login',[LoginController::class,'authenticate']);

Route::post('register',[RegisterController::class,'create']);

Route::post('logout',[LoginController::class,'logout']);

Route::get('type',[ProductController::class,'searchType']);

Route::view('test', 'cart_element');
Route::view('cart','cart');

Route::post('oneProduct',[ProductController::class,'oneProduct']);

/***Login admin */

Route::get('loginAdmin',[LoginController::class,'showLoginFormAdmin'])->name('loginAdmin');
Route::post('loginAdmin',[LoginController::class,'adminLogin'])->name('formAdmin');
Route::get('/admin', function () {

    return view('admin.home');
})->name('homeAdmin');