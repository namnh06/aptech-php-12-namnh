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


Route::get('/', 'ArticleController@homepage');

Route::get('/create', 'ArticleController@create');

Route::post('/store', 'ArticleController@store');

Route::get('/{id}/print', 'ArticleController@print');

Route::get('/{id}/edit', 'ArticleController@edit');

Route::put('/{id}/update', 'ArticleController@update');

Route::delete('/{id}/delete', 'ArticleController@delete');
