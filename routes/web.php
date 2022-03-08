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

Route::get('/', "HomeController@index");
Route::get('/article', "HomeController@article");
Route::get('/shop', "HomeController@shop");
Route::get('/support', "HomeController@support");
Route::get('/who', "HomeController@who");

Route::resource('comics', "ComicController");
