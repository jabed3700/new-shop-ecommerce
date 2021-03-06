<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/',function(){
//     return view('front.index');
// })->name('/');

Route::get('/','FrontController@index')->name('/');
Route::get('/category/product/{id}','FrontController@category_product')->name('category.product');
Route::get('/product/details/{id}','FrontController@product_details')->name('product.details');
// Admin panel 
Route::get('/dashboard','DashboardController@index')->name('dashboard');

Route::resource('/category', "CategoryController");

// Brand 
Route::get('/brand/index','BrandController@index')->name('brand.index');
Route::get('/brand/create','BrandController@create')->name('brand.create');
Route::post('/brand/store','BrandController@store')->name('brand.store');
Route::get('/brand/edit/{id}','BrandController@edit')->name('brand.edit');
Route::post('/brand/update','BrandController@update')->name('brand.update');
Route::get('/brand/delete/{id}','BrandController@delete')->name('brand.delete');

Route::get('/brand/unpublished/{id}','BrandController@unpublished')->name('brand.unpublished');
Route::get('/brand/published/{id}','BrandController@published')->name('brand.published');

// Product 
Route::get('/product/index','ProductController@index')->name('product.index');
Route::get('/product/create','ProductController@create')->name('product.create');
Route::post('/product/store','ProductController@store')->name('product.store');
Route::get('/product/edit/{id}','ProductController@edit')->name('product.edit');
Route::post('/product/update','ProductController@update')->name('product.update');
Route::get('/product/delete/{id}','ProductController@delete')->name('product.delete');


// tag 
Route::get('/tag/index','TagController@index')->name('tag.index');
Route::get('/tag/create','TagController@create')->name('tag.create');
Route::post('/tag/store','TagController@store')->name('tag.store');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
