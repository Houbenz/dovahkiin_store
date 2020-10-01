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


Route::get('users','UserController@getUsers');

Route::get('/',function(){

    return view('home');
});


/*PRODUCTS*/
Route::post('products/search','ProductController@search')->name('products.search');
Route::resource('products', 'ProductController');
Route::view('test','product_detail');
Route::view('vue','testvue');


/***Login */

Route::post('login',[LoginRegister::class,'authenticate']);

Route::post('register',[RegisterController::class,'create']);


//Route::post('login','LoginController@authenticate');
//Route::post('register','RegisterController@create');
