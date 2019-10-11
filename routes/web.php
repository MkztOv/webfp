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
use Illuminate\Support\Facades\Input;
use App\log_kehadiran;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/home1','HomeController@index2')->name('home');

// Auth::routes();
//route utk Authorize
Route::group(['namespace'=>'Auth'],function(){

  // Authentication Routes...
  Route::get('login', 'LoginController@showLoginForm')->name('login');
  Route::post('login', 'LoginController@login');
  Route::post('logout', 'LoginController@logout')->name('logout');

  // Password Reset Routes...
  // Route::get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  // Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');
  // Route::get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset.token');
  // Route::post('password/reset', 'ResetPasswordController@reset');
  // Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
  // Route::post('register', 'Auth\RegisterController@register');
});

//route utk Authorize

//middleware
Route::group(['middleware'=> ['auth','checkRole:admin']], function(){

      Route::get('/data_scanlog2','LogKehadiranController@viewlogscan');
      // Route::get('/data_scanlog3','LogKehadiranController@view3');
      // Route::any('/data_scanlog2', function(){
      //   $cari = Input::get('cari');
      //   if($cari != ''){
      //     // $logscan = DB::Raw('
      //     //   select pin, (select convert(scan_date, date)) as Hari, count(scan_date) as Total_scan
      //     //   from att_log
      //     //   where scan_date like "2019%"
      //     //   group by hari,pin
      //     //   order by scan_date desc
      //     // ');
      //     $logscan =  log_kehadiran::select('pin','(select convert(scan_date, date)) as Hari','count(scan_date) as Total_scan')
      //                               ->Where('scan_date','like',''.$cari.'%')
      //                               ->groupBy('hari','pin')
      //                               ->orderBy('scan_date','desc')
      //                               ->paginate(10)
      //                               ->setPath('');
      //     $logscan->appends(array(
      //       'cari'=>Input::get('cari')
      //     ));
      //     if (count($logscan)>0) {
      //       return view ('laporan.data_scanlog2')->with(['logscan'=>$logscan]);
      //     }
      //     return view ('laporan.data_scanlog2')->with('message','Data Tidak ditemukan');
      //   }elseif($cari == ''){
      //     return redirect('data_scanlog2')->with('status','Tidak Ada Data yang dicari');
      //   }
      // });



      Route::get('/cobacharts','LogKehadiranController@index');
      // Route::get('/aktif','PegawaiController@index');
      Route::get('/tambah','PegawaiController@tambah');
      //route pegawai
      Route::get('/pegawai', 'HomeController@pegawai');
      Route::get('/aktif', 'HomeController@aktif');
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

      //data scan log nantinya admin bisa lihat semua pegawai

      Route::any('/searchScanLog', function(){
        $cari = Input::get('cari');
        if($cari != ''){
          $kehadiran =  log_kehadiran::select('scan_date','pin','sn')
                                    ->Where('pin','like','%'.$cari.'%')
                                    ->orderBy('scan_date','desc')
                                    ->paginate(10)
                                    ->setPath('');
          $kehadiran->appends(array(
            'cari'=>Input::get('cari')
          ));
          if (count($kehadiran)>0) {
            return view ('laporan.data_scanlog')->with(['kehadiran'=>$kehadiran]);
          }
          return view ('laporan.data_scanlog')->with('message','Data Tidak ditemukan');
        }elseif($cari == ''){
          return redirect('data_scanlog')->with('status','Tidak Ada Data yang dicari');
        }
      });
      // Route::get('/data_scanlog', 'HomeController@searchScanLog');
      //
      //

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
      Route::post('/user/create','HomeController@create');

});

Route::group(['middleware'=> ['auth','checkRole:admin,pkl,staff']], function(){
  Route::get('/home', 'HomeController@index')->name('home');
  Route::get('/profile','HomeController@profile');

  /*data Laporan
  harian user*/
  //data scan log nantinya hanya menampilkan data user yang sedang login
  Route::any('/data_scanlog', 'HomeController@data_scanlog');
  // Route::get('/Caridata_scanlog','HomeController@Caridata_scanlog');
  //
  Route::get('/kartu_scanlog', 'HomeController@kartu_scanlog');
  Route::get('/rincian_harian', 'HomeController@rincian_harian');
});
