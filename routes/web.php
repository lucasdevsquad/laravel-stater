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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/dashboard', 'HomeController@index')->name('dashboard');
Route::get('/users', 'UsersController@index')->name('users');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');