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



Route::get('/', 'UsersController@index');
Route::get('/create', 'UsersController@create');
Route::get('/user/{user}/edit', 'UsersController@edit');

Route::post('/', 'UsersController@store');

Route::patch('/', 'UsersController@update');

Route::get('/delete/{user}','UsersController@destroy')->name('user.delete');

Route::get('/search','UsersController@search');