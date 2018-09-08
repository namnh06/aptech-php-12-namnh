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

//

Route::get('/articles/index', 'ArticleController@index');
Route::get('/articles/create', 'ArticleController@create');
Route::post('/articles/store', 'ArticleController@store');

Route::get('/articles/{id}/show', 'ArticleController@show');

Route::get('/articles/{id}/edit', 'ArticleController@edit');

Route::put('/articles/{id}/update', 'ArticleController@update');

Route::delete('/articles/{id}/destroy', 'ArticleController@destroy');

