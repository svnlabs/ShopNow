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


Route::get('/test','testcontroller@index'); 

Auth::routes();
Route::resource('/', 'FrontController');
Route::resource('/wishlist', 'WishlistController');
Route::resource('/user', 'UserController');
Route::resource('/compare', 'CompareController');




// |------------------------ Cart ---------------------------------------------------------|
Route::resource('/cart', 'CartController');
Route::get('add-to-cart/{id}', 'CartController@addToCart')->name('add.cart');
Route::patch('update-cart', 'CartController@update'); 
Route::delete('remove-from-cart', 'CartController@remove');
Route::delete('remove-all', 'CartController@removeAll');
// |------------------------ Cart ---------------------------------------------------------|

// |------------------------ Compare ------------------------------------------------------|
Route::get('add-to-compare/{id}', 'CompareController@addToCompare');
Route::delete('remove-from-compare', 'CompareController@remove');
// |------------------------ Compare ------------------------------------------------------|

// |------------------------ Shop Controller ----------------------------------------------|
Route::get('/shop/category/{id}', 'FrontController@category')->name('shop.category');
Route::get('/shop/brand/{id}', 'FrontController@brand')->name('shop.brand');
Route::get('/shop/product/{id}', 'FrontController@product')->name('shop.product');
Route::get('/shop/checkout', 'FrontController@checkout')->name('shop.checkout');
Route::post('/shop/applypromo', 'FrontController@applypromo')->name('apply.promo');
Route::post('/shop/placeorder', 'FrontController@placeorder')->name('place.order');
Route::get('search', 'FrontController@search');
// |------------------------ Shop Controller ----------------------------------------------|






// |---------------------- Admin Panel COntroller Collections -----------------------------|
Route::get('/admin/login', 'Auth\LoginController@showAdminLoginForm');
Route::post('/admin/authenticating', 'Auth\LoginController@adminLogin');

Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function () {

Route::resource('/', 'DashboardController');
Route::resource('product', 'ProductController');
Route::resource('category', 'CategoryController');
Route::resource('brand', 'BrandController');
Route::resource('slides', 'SliderController');
Route::resource('deal', 'DealController');
Route::resource('coupon', 'CouponController');
Route::resource('shipment', 'ShipmentController');
Route::resource('order', 'OrderController');
Route::get('all', 'OrderController@all')->name('order.all');


});
// |---------------------- Admin Panel COntroller Collections -----------------------------|







