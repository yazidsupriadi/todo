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

Route::get('/todos','TodoController@index');
Route::get('/todos/create','TodoController@create');
Route::post('/todos/store','TodoController@store');
Route::get('/todos/{id}/detail','TodoController@detail');
Route::get('/todos/{id}/edit','TodoController@edit');
Route::post('/todos/{id}/update','TodoController@update');
Route::get('/todos/{id}/delete','TodoController@delete');
