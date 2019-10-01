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

Route::get('/', function (){
    $products = App\Product::all();
    $categories = App\Category::all();

    return view('index', compact('products', 'categories'));
});


Route::group(["prefix" => "cart"], function() {
    Route::get('show', 'CartController@show');
    Route::get('add/{pID}', 'CartController@store');
    Route::get('remove/{cID}', 'CartController@delete');
});

Route::group(["prefix" => "category"], function() {
    Route::get('show/{cID}', 'CategoryController@show');
});

Auth::routes();

