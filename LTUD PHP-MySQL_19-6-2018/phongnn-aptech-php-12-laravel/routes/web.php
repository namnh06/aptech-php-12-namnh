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
Route::get('/home', 'ArticleController@home')->name('home');

Route::get('article/create', 'ArticleController@create')->name('create');
Route::post('article/create', 'ArticleController@postCreate')->name('postCreate');

Route::get('article/edit/{id}', 'ArticleController@edit')->name('edit');
Route::post('article/edit/{id}', 'ArticleController@postEdit')->name('postEdit');

Route::get('delete/{id}', 'ArticleController@getDelete')->name('delete');