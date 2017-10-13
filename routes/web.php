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


//Auth::routes();

Route::get('/users/', 'UserController@index')->name('users');
Route::post('/users/', 'UserController@create')->name('create');
Route::get('/users/{id}/', 'UserController@show')->name('show-user');
Route::update('/users/{id}/', 'UserController@edit')->name('update');



