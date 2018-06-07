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

// Route::get('/welcome', function () {
//     $sum = 5 + 5;
//     return view('welcome-1', ['sum' => $sum]);
// });

// Route::get('/user/{id}', function ($id) {
//     switch ($id) {
//         case 5:
//             return 'Hello Quy';
//         case 6:
//             return 'Hello Pham';
//         default:
//             return 'Hello Anonymous';
//     }
// });

// Route::get('/thoi-trang/vietnam')
// Route::get('/thoi-trang/quocte')

// Route::prefix('thoi-trang')->group(function () {
//     Route::get('viet-nam', function () {
//         return "THOI-TRANG/VIETNAM";
//     });
//     Route::get('quoc-te', function () {
//         return "THOI-TRANG/QUOCTE";
//     });
// });

Route::get('/greeting', function () {
    return view('greeting', ['name' => 'James', 'age' => '99']);
});

Route::view('/child', 'child');
