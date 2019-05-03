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


Route::get('/', 'Home\HomeController@index')->name('index');
Route::get('/career','Home\HomeController@career')->name('career');
Route::get('/vacancy/{id}','Home\HomeController@vacancy')->name('vacancy');
Route::get('/vacancy', function () {
    return view('home.vacancy');
})->name('vacancy');
Route::get('/product', 'Home\HomeController@product')->name('product');
Route::get('/blog-detail', function () {
    return view('home.detail');
})->name('detail');
Route::get('/blogs', function () {
    return view('home.blog');
})->name('blog');
Route::get('/worksheet', 'Home\HomeController@workSheet')->name('worksheet');


Route::post('/response','Home\HomeController@response' )->name('response');
 // Route::get('/home', 'HomeController@index');
 Route::get('/home', function () {
     return redirect()->route('response.index');
 });

Route::prefix('admin')->group(function () {
    Route::get('/','Admin\AdminController@showResponse' )->name('response.index');
      Route::get('/codestore','Admin\CodeController@codeStore' )->name('code.stores');
    Route::resource('/product','Admin\ProductController');
    Route::resource('/service','Admin\ServiceController');
    Route::resource('/career','Admin\CareerController');
    Route::resource('/code','Admin\CodeController');
});

Auth::routes();
