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

Route::get('/pegawai_aktif','HomeController@pegawai_aktif');

Route::get('/profile','HomeController@profile');

Route::get('/pegawai', 'HomeController@pegawai');
Route::get('/aktif', 'HomeController@aktif');
Route::get('/berhenti', 'HomeController@berhenti');
Route::get('/detail', 'HomeController@detail');
Route::get('/habis', 'HomeController@habis');
Route::get('/nonaktif', 'HomeController@nonaktif');