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

Route::get('/', 'Home\HomeController@index')->name('home');
Route::get('/product','Home\HomeController@product' )->name('product');
Route::get('/service','Home\HomeController@service' )->name('service');
Route::get('/contact','Home\HomeController@contact' )->name('contact');
Route::get('/detail','Home\HomeController@detail' )->name('detail');
Route::post('/response','Home\HomeController@store' )->name('response');
Route::get('/career','Home\HomeController@career' )->name('career');
Route::get('/vacancy','Home\HomeController@vacancy')->name('vacancy');


Route::prefix('admin')->group(function () {
    Route::get('/','Admin\AdminController@showResponse' )->name('response.index');
    Route::resource('/product','Admin\ProductController');
    Route::resource('/service','Admin\ServiceController');
    Route::resource('/career','Admin\CareerController');
});
