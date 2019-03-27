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

Route::get('/test', function () {
    return view('admin.layouts.masterLayout');
});

Route::resource('categories', 'Admin\CategoryController')->except('destroy');
Route::get('categories/destroy/{slug}', 'Admin\CategoryController@destroy')->name('categories.destroy');
Route::resource('products', 'Admin\ProductController')->except('destroy');
Route::get('products/destroy/{slug}', 'Admin\ProductController@destroy')->name('products.destroy');
Route::resource('banners', 'Admin\BannerController')->except('destroy');
Route::get('banners/destroy/{id}', 'Admin\BannerController@destroy')->name('banners.destroy');
Route::resource('users', 'Admin\UserController')->except('destroy');
Route::get('users/destroy/{id}', 'Admin\UserController@destroy')->name('users.destroy');
Route::resource('contacts', 'Admin\ContactController')->except('destroy');
Route::get('contacts/destroy/{id}', 'Admin\ContactController@destroy')->name('contacts.destroy');
Route::resource('settings', 'Admin\SettingController');
Route::resource('orders', 'Admin\OrderController')->except('destroy');
Route::get('orders/destroy/{id}', 'Admin\OrderController@destroy')->name('orders.destroy');
Route::resource('order_details', 'Admin\Order_detailController')->except('destroy');
Route::get('order_details/destroy/{id}', 'Admin\Order_detailController@destroy')->name('order_details.destroy');