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

Route::get('/', 'TeamController@index')->name('home');
Route::get('/teams/{team}', 'TeamController@show');
Route::get('/players', 'PlayerController@index');
Route::get('/players/{player}', 'PlayerController@show');

Route::get('/register', 'RegisterController@index');
Route::post('/register', 'RegisterController@store');

Route::get('/login', 'LoginController@index');
Route::get('/logout', 'LoginController@destroy');
Route::post('/login', 'LoginController@store');
