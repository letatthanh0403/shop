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
    return view('welcome');
});

route::get('index','PageController@getIndex')->name('home');
route::get('product-type/{type}','PageController@getProductType')->name('product-type');
route::get('product','PageController@getProduct');
route::get('contact','PageController@getContact')->name('contact');