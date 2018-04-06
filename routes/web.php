<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/

//User
Route::get('/', 'UserController@index');
Route::get('/create', 'UserController@create');
Route::get('/edit', 'UserController@edit');
Route::get('/delete', 'UserController@delete');

Route::get('/api/user/create', 'UserController@createapi');
Route::get('/api/user/edit', 'UserController@editapi');
Route::get('/api/user/delete', 'UserController@deleteapi');