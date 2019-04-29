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

use App\Http\Middleware\HelloMiddleware;

Route::get('/test', function () {
    echo 'test';
});

// Route::get('hello',         'HelloController@index');
// Route::get('hello/{id?}', 'HelloController@index');
Route::post('hello',        'HelloController@post');
Route::get('hello',         'HelloController@index')
    ->middleware('helo');
Route::get('hello/add',     'HelloController@add');
Route::post('hello/add',    'HelloController@create');