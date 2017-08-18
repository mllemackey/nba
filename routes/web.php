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

Route::get('/', 'TeamController@index');
Route::get('/teams/{team}', 'TeamController@show');
Route::post('/teams/{team}', 'CommentController@store');
Route::get('/players', 'PlayerController@index');
Route::get('/players/{player}', 'PlayerController@show');

Route::get('/register', 'RegisterController@index');
Route::post('/register', 'RegisterController@store');

Route::get('/login', 'LoginController@index')->name('login');
Route::get('/logout', 'LoginController@destroy');
Route::post('/login', 'LoginController@store');

Route::get('/news', 'NewsController@index');
Route::get('/news/{news}', 'NewsController@show');
