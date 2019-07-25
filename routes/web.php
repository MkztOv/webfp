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

// Route::get('/aktif','PegawaiController@index');
Route::get('/tambah','PegawaiController@tambah');
//route pegawai
Route::get('/pegawai', 'HomeController@pegawai');
Route::get('/aktif', 'HomeController@aktif');
// Route::get('/pg_aktif','PegawaiController@aktif_v');
//route tambah Pegawai
// Route::get('/tambah_pegawai','HomeController@TambahPegawai');

Route::get('/berhenti', 'HomeController@berhenti');
Route::get('/detail', 'HomeController@detail');
Route::get('/habis_kontrak', 'HomeController@habis');
Route::get('/nonaktif', 'HomeController@nonaktif');

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

//route laporan
Route::get('/data_scanlog', 'HomeController@data_scanlog');
Route::get('/kartu_scanlog', 'HomeController@kartu_scanlog');
Route::get('/rincian_harian', 'HomeController@rincian_harian');
Route::get('/shift_harian', 'HomeController@shift_harian');
Route::get('/rekap_periode', 'HomeController@rekap_periode');
Route::get('/cuti_normatif', 'HomeController@cuti_normatif');
Route::get('/cuti_pribadi', 'HomeController@cuti_pribadi');
Route::get('/datang_terlambat', 'HomeController@datang_terlambat');
Route::get('/pulang_awal', 'HomeController@pulang_awal');
Route::get('/scan_kerja_1x', 'HomeController@scan_kerja_1x');
Route::get('/lembur', 'HomeController@lembur');
Route::get('/istirahat_lebih', 'HomeController@istirahat_lebih');
Route::get('/rekap_tambahan', 'HomeController@rekap_tambahan');
Route::get('/scan_diluar_jadwal', 'HomeController@scan_diluar_jadwal');
Route::get('/datang_terlambat_aktual', 'HomeController@datang_terlambat_aktual');
Route::get('/pulang_awal_aktual', 'HomeController@pulang_awal_aktual');
Route::get('/kartu_shift', 'HomeController@kartu_shift');
Route::get('/rincian_tahunan', 'HomeController@rincian_tahunan');

//route user
Route::get('/user','HomeController@listuser');
