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
    return view('auth.login');
});

Route::get('login', 'AuthController@index')->name('login');
Route::post('post-login', 'AuthController@postLogin');
Route::get('registration', 'AuthController@registration')->name('register');
Route::post('post-registration', 'AuthController@postRegistration');
Route::get('dashboard', 'AuthController@dashboard')->name('dashboard');
Route::get('logout', 'AuthController@logout')->name('logout');

//Product
Route::group(['as' => 'product.', 'prefix' => 'product'], function(){
    Route::get('index', 'ProductController@index')->name('index');
    Route::get('create', 'ProductController@create')->name('create');
    Route::post('store', 'ProductController@store')->name('store');
    Route::get('edit', 'ProductController@edit')->name('edit');
    Route::post('update', 'ProductController@update')->name('update');
    Route::get('delete', 'ProductController@delete')->name('delete');
});

//Category
Route::group(['as' => 'category.', 'prefix' => 'category'], function(){
    Route::get('index', 'CategoryController@index')->name('index');
    Route::get('create', 'CategoryController@create')->name('create');
    Route::post('store', 'CategoryController@store')->name('store');
    Route::get('edit', 'CategoryController@edit')->name('edit');
    Route::post('update', 'CategoryController@update')->name('update');
    Route::get('delete', 'CategoryController@delete')->name('delete');
});

//Brand
Route::group(['as' => 'brand.', 'prefix' => 'brand'], function(){
    Route::get('index', 'BrandController@index')->name('index');
    Route::get('create', 'BrandController@create')->name('create');
    Route::post('store', 'BrandController@store')->name('store');
    Route::get('edit', 'BrandController@edit')->name('edit');
    Route::post('update', 'BrandController@update')->name('update');
    Route::get('delete', 'BrandController@delete')->name('delete');
});
