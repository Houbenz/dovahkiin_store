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

Route::get('/', function () {
    return view('index');
});

Route::get('users','UserController@getUsers');

Route::get('products',function(){

    $products=['azef','aze','blade','azef','aze','blade'];
    return view('products')->with('products', $products);
});

Route::get('home',function(){

    $products=['azef','aze','blade','azef','aze','blade'];
    return view('home')->with('products', $products);
});
