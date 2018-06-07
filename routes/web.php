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




Route::get('/','FrontController@index')->name('home');
Route::get('products','FrontController@products')->name('products');
Route::get('offers','FrontController@offers')->name('offers');
Route::get('women','FrontController@womenProducts')->name('women');
Route::get('men','FrontController@menProducts')->name('men');
Route::get('/item/{id}','FrontController@items');
Route::get('/home', 'FrontController@index')->name('home');



Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout', 'Auth\LoginController@Logout');

Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){

Route::get('/',function(){

    return view ('admin.index');
})->name('admin.index');

Route::resource('product','ProductsController');

Route::resource('category','CategoriesController');
Route::resource('offer','OffersController');
});
