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





Route::resource('/', 'FrontController');



// |------------------------ Cart ---------------------------------------------------------|

Route::resource('/cart', 'CartController');
Route::get('add-to-cart/{id}', 'CartController@addToCart');
Route::patch('update-cart', 'CartController@update'); 
Route::delete('remove-from-cart', 'CartController@remove');

// |------------------------ Cart ---------------------------------------------------------|


// |------------------------ Shop Controller ----------------------------------------------|
Route::get('/shop/category/{id}', 'FrontController@category')->name('shop.category');
Route::get('/shop/brand/{id}', 'FrontController@brand')->name('shop.brand');
Route::get('/shop/product/{id}', 'FrontController@product')->name('shop.product');
// |------------------------ Shop Controller ----------------------------------------------|






// |---------------------- Admin Panel COntroller Collections -----------------------------|

Route::group(['prefix' => 'admin'], function () {

Route::resource('admin', 'DashboardController');
Route::resource('product', 'ProductController');
Route::resource('category', 'CategoryController');
Route::resource('brand', 'BrandController');

});
// |---------------------- Admin Panel COntroller Collections -----------------------------|