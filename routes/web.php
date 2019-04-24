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

Route::get('/test', function () {
    echo 'test';
});

// // Route::get('hello/{id?}/{pass?}', 'HelloController@index');
// Route::get('hello', 'HelloController@index');
// Route::get('hello/other', 'HelloController@other');
// Route::get('hello', 'HelloController');
// Route::get('hello', function() {
//     return view('hello.index');
// });

Route::get('hello',       'HelloController@index');
// Route::get('hello/{id?}', 'HelloController@index');