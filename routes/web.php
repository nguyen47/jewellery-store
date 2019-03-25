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
Route::get('banners/destroy/{slug}', 'Admin\BannerController@destroy')->name('banners.destroy');