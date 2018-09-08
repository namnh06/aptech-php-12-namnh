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
Route::get('/category', 'ArticleController@index')->name('category-home');

Route::get('/category/create', 'ArticleController@create')->name('category-create');

Route::post('/category/store', 'ArticleController@store')->name('category-store');

Route::get('/category/{id}/show', 'ArticleController@show')->name('category-detail');

Route::get('/category/{id}/edit', 'ArticleController@edit')->name('category-edit');

Route::put('/category/{id}/update', 'ArticleController@update')->name('category-update');

Route::delete('/category/{id}/destroy', 'ArticleController@destroy')->name('category-destroy');