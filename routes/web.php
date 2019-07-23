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




// |------------------------ Web Site Controller Collection -------------------------------|
Route::resource('/', 'FrontController');
Route::resource('/cart', 'CartController');
Route::get('add-to-cart/{id}', 'CartController@addToCart');
Route::patch('update-cart', 'CartController@update'); 
Route::delete('remove-from-cart', 'CartController@remove');
// |------------------------ Web Site Controller Collection -------------------------------|








// |---------------------- Admin Panel COntroller Collections -----------------------------|
Route::group(['prefix' => 'admin'], function () {

Route::resource('admin', 'DashboardController');
Route::resource('product', 'ProductController');
Route::resource('category', 'CategoryController');
Route::resource('brand', 'BrandController');

});
// |---------------------- Admin Panel COntroller Collections -----------------------------|