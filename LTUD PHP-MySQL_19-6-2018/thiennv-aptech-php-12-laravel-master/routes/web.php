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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/article/home','ArticleController@index')->name('home');
Route::get('/article/create','ArticleController@create')->name('create');
Route::post('/article/store','ArticleController@store')->name('store');
Route::get('/article/{id}/show','ArticleController@show')->name('show');
Route::get('/article/{id}/edit','ArticleController@edit')->name('edit');
Route::put('/article/{id}/update','ArticleController@update')->name('update');
Route::delete('/article/{id}/destroy','ArticleController@destroy')->name('destroy');
