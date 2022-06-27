<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'MovieController@index');
Route::get('alphabet', 'MovieController@alphabet')->name('alphabet');
Route::get('wallUp', 'MovieController@wallUp')->name('wallUp');
Route::get('wallDown', 'MovieController@wallDown')->name('wallDown');
Route::get('about', 'PageController@about')->name('about');