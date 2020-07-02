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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'WebsiteController@index');
Route::get('/courses', 'WebsiteController@course');
Route::get('/page', 'WebsiteController@page');
Route::get('/news', 'WebsiteController@news');
Route::get('/contact', 'WebsiteController@contact');