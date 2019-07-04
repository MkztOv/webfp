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

Route::get('/profile','HomeController@profile');
//methode untuk menu pegawai
Route::get('/pegawai', 'HomeController@pegawai');
Route::get('/aktif', 'HomeController@aktif');
Route::get('/berhenti', 'HomeController@berhenti');
Route::get('/detail', 'HomeController@detail');
Route::get('/habis_kontrak', 'HomeController@habis');
Route::get('/non_aktif', 'HomeController@nonaktif');

//route pengecualian
Route::get('/izin_kolektif', 'HomeController@izin_kolektif');
Route::get('/izin_personal', 'HomeController@izin_personal');
Route::get('/gantijadwal', 'HomeController@gantijadwal');
Route::get('/gantijadwal_perbagian', 'HomeController@gantijadwal_perbagian');
Route::get('/gantijadwal_perpegawai', 'HomeController@gantijadwal_perpegawai');
Route::get('/gantijam', 'HomeController@gantijam');
Route::get('/gantijam_perbagian', 'HomeController@gantijam_perbagian');
Route::get('/gantijam_perpegawai', 'HomeController@gantijam_perpegawai');
Route::get('/tukarjam', 'HomeController@tukarjam');
Route::get('/jadwallembur', 'HomeController@jadwallembur');
Route::get('/kerjaextra', 'HomeController@kerjaextra');

//route mesin