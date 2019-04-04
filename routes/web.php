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

Route::get('/', 'HomepageController@index');
Route::get('/categories', 'CategoryController@index');

Route::get('/test', function () {
    return view('admin.layouts.masterLayout');
});


Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::resource('categories', 'CategoryController')->except('destroy');
    Route::get('categories/destroy/{slug}', 'CategoryController@destroy')->name('categories.destroy');
    Route::resource('products', 'ProductController')->except('destroy');
    Route::get('products/destroy/{slug}', 'ProductController@destroy')->name('products.destroy');
    Route::resource('banners', 'BannerController')->except('destroy');
    Route::get(' /destroy/{id}', 'BannerController@destroy')->name('banners.destroy');
    Route::resource('users', 'UserController')->except('destroy');
    Route::get('users/destroy/{id}', 'UserController@destroy')->name('users.destroy');
    Route::resource('contacts', 'ContactController')->except('destroy');
    Route::get('contacts/destroy/{id}', 'ContactController@destroy')->name('contacts.destroy');
    Route::resource('settings', 'SettingController');
    Route::resource('orders', 'OrderController')->except('destroy');
    Route::get('orders/destroy/{id}', 'OrderController@destroy')->name('orders.destroy');
    Route::resource('order_details', 'Order_detailController')->except('destroy');
    Route::get('order_details/destroy/{id}', 'Order_detailController@destroy')->name('order_details.destroy');
});
