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
    $products = App\Products::all();

    return view('index', compact('products'));
});


Route::group(["prefix" => "cart"], function() {
    Route::get('show', 'CartController@show');
    Route::get('add/{pID}', 'CartController@store');
    Route::get('remove/{cID}', 'CartController@delete');
});
    

Auth::routes();

