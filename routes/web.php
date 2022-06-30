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

Route::get('/', function () {
    return view('welcome');
});

Route::get('home',    'HomeController@home')->name('home');
Route::get('about',   'HomeController@about')->name('about');
Route::get('contact', 'HomeController@contact')->name('contact');
Route::get('create',  'HomeController@create')->name('create');
Route::post('store',  'HomeController@store')->name('store');
