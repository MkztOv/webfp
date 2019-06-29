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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/home1','HomeController@index2')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/menu1','HomeController@menu');
Route::get('/profile','HomeController@profile');
