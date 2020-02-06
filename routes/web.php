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
Route::group(['prefix' => 'product', 'as' => 'product.'], function(){
    Route::get('list', 'ProductController@index')->name('list');
    Route::get('create', 'ProductController@create')->name('create');
    Route::post('store', 'ProductController@store')->name('store');
    Route::get('edit', 'ProductController@edit')->name('edit');
    Route::post('update', 'ProductController@update')->name('update');
    Route::get('delete', 'ProductController@delete')->name('delete');
});


//Brand
Route::group(['prefix' => 'brand', 'as' => 'brand.'], function(){
    Route::get('list', 'BrandController@index')->name('list');
    Route::get('create', 'BrandController@create')->name('create');
    Route::post('store', 'BrandController@store')->name('store');
    Route::get('edit/{id}', 'BrandController@edit')->name('edit');
    Route::post('update/{id}', 'BrandController@update')->name('update');
    Route::get('delete/{id}', 'BrandController@delete')->name('delete');
});

//Category
Route::group(['prefix' => 'category', 'as' => 'category.'], function(){
    Route::get('list', 'CategoryController@index')->name('list');
    Route::get('create', 'CategoryController@create')->name('create');
    Route::post('store', 'CategoryController@store')->name('store');
    Route::get('edit/{id}', 'CategoryController@edit')->name('edit');
    Route::post('update/{id}', 'CategoryController@update')->name('update');
    Route::get('delete/{id}', 'CategoryController@delete')->name('delete');
});
