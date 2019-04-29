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
// Peopleの新規作成
Route::get('hello/add',     'HelloController@add');
Route::post('hello/add',    'HelloController@create');
// Peopleの編集＆更新
Route::get('hello/edit',     'HelloController@edit');
Route::post('hello/edit',    'HelloController@update');
// Peopleの削除画面&削除実行
Route::get('hello/del',     'HelloController@del');
Route::post('hello/del',    'HelloController@remove');
// Peopleの詳細画面
Route::get('hello/show',    'HelloController@show');