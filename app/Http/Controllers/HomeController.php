<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Pagination\LengthAwarePaginator;
// use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function profile()
    {
        return view('tampilan.profile');
    }

    public function Postlogin(Request $request)
    {
      dd($request->all());
    }

    //method Pegawai

    public function aktif(){
      // $pegawai = DB::table('pegawai')->paginate(10);
      // return view ('pegawai.aktif', ['pegawai'=>$pegawai]);

      // $pegawai_a = DB::select('CALL VIEW_P_AKTIF()');
      // $pegawai_a = pegawai::all();
      // $pegawai_a = $model->hydrate(DB::select('CALL VIEW_P_AKTIF()'));
      // return view ('pegawai.aktif')->with([
      //   'pegawai_a'=>$pegawai_a
      // ]);

      // $page = request('page',4);
      // $pageSize = 20;
      // $results = DB::select(DB::raw('CALL VIEW_P_AKTIF()'));
      // $offset = ($page * $pageSize) - $pageSize;
      // $data = array_slice($results, $offset, $pageSize, true);
      // $pegawai_a = new LengthAwarePaginator($data, count($data), $pageSize, $page);
      //
      $pegawai_a = DB::table('pegawai')
                      ->leftJoin('jkm_with_jkp',
                                 'pegawai.pegawai_id','=','jkm_with_jkp.pegawai_id')
                      ->leftJoin('pembagian1',
                                  'pegawai.pembagian1_id','=','pembagian1.pembagian1_id')
                      ->leftJoin('pembagian2',
                                 'pegawai.pembagian2_id','=','pembagian2.pembagian2_id')
                      ->leftJoin('pembagian3',
                                 'pegawai.pembagian3_id','=','pembagian3.pembagian3_id')
                      ->leftJoin('kontrak_kerja',
                                 'pegawai.pegawai_id','=','kontrak_kerja.pegawai_id')
                      ->select('pegawai.pegawai_id','pegawai.pegawai_pin','pegawai.pegawai_nip','pegawai.pegawai_nama',
                               'jkm_with_jkp.jdw_kerja_m_name','jkm_with_jkp.jdw_kerja_m_mulai',
                               'pegawai.tempat_lahir','pegawai.tgl_lahir','pembagian1.pembagian1_nama',
                               'pembagian2.pembagian2_nama','pembagian3.pembagian3_nama',
                               'pegawai.pegawai_pwd','pegawai.pegawai_rfid','pegawai.pegawai_telp',
                               'pegawai.pegawai_privilege','pegawai.pegawai_status','pegawai.tgl_mulai_kerja','kontrak_kerja.kontrak_end')
                      ->paginate(15);
      return view ('pegawai.aktif',compact('pegawai_a'));

// ->with(['pegawai_a'=>$pegawai_a])
    }

    //user list
    public function create (Request $request)
    {
      //input ke tabel user
      $user = new \App\User;
      $user->name = $request->name;
      $user->email = $request->email;
      // $user->password = bcrypt('$request->password');
      $user->email = Hash::make($request->password);
      $user->role = $request->role;
      $user->remember_token = str_random(10);
      $user->save();
      //
      // User::create($request->all());
      return redirect('/user')->with('Berhasil','Data telah masuk');
      // return $request->all();
    }
    
    //update user
    public function update (Request $request)
    {
        $user = new \App\User;
        $user->where('id', $request->id)->update([
            'nama' => $request->nama,
            'email' => $request->email,
            'email' => $request->email  = Hash::make($request->password),
            'role' => $request->role
        ]);
        $user->remember_token = str_random(10);
        $user->save();
        //
        // User::create($request->all());
        return redirect('/user')->with('Berhasil','Data telah diubah');
    }

    //delete data pegawai
    public function hapus($id){
        //menghapus data
        DB::table('users')->where('id',$id)->delete();

        //alihkan ke halaman utama
        
        return redirect('/user')->with('Berhasil','Data telah dihapus');
    }
    //user list

    //view tambah pegawai di dalam pegawai Aktif
    public function TambahPegawai()
    {
      return view('pegawai/foldertambahpegawai/tambah_pegawai');
    }

    public function berhenti(){
        return view('pegawai/berhenti');
    }

    public function detail(){
        return view('pegawai/detail_pegawai');
    }

    public function habis(){
        return view('pegawai/habis_kontrak');
    }

    public function nonaktif(){
        return view('pegawai/non_aktif');
    }

    //METHOD PENGECUALIAN

    public function izin_kolektif() {
        return view('pengecualian/izin_terlambat_cuti_kolektif');
    }

    public function izin_personal() {
        return view('pengecualian/izin_terlambat_cuti_personal');
    }

    public function gantijadwal() {
        return view('pengecualian/ganti_jadwal_kerja');
    }

    public function gantijadwal_perbagian() {
        return view('pengecualian/ganti_jadwal_kerja_perbagian');
    }

    public function gantijadwal_perpegawai() {
        return view('pengecualian/ganti_jadwal_kerja_perpegawai');
    }

    public function gantijam() {
        return view('pengecualian/ganti_jam_kerja');
    }

    public function gantijam_perbagian() {
        return view('pengecualian/ganti_jam_kerja_perbagian');
    }

    public function gantijam_perpegawai() {
        return view('pengecualian/ganti_jam_kerja_perpegawai');
    }

    public function tukarjam() {
        return view('pengecualian/tukar_jam_kerja');
    }

    public function jadwallembur() {
        return view('pengecualian/penjadwalan_lembur');
    }

    public function kerjaextra() {
        return view('pengecualian/kerja_extra_perhari');
    }

    public function data_scanlog() {
        return view('laporan/data_scanlog');
    }

    public function kartu_scanlog() {
        return view('laporan/kartu_scanlog');
    }

    public function rincian_harian() {
        return view('laporan/rincian_harian');
    }

    public function shift_harian() {
        return view('laporan/shift_harian');
    }

    public function rekap_periode() {
        return view('laporan/rekap_periode');
    }

    public function cuti_normatif() {
        return view('laporan/cuti_normatif');
    }

    public function cuti_pribadi() {
        return view('laporan/cuti_pribadi');
    }

    public function datang_terlambat() {
        return view('laporan/datang_terlambat');
    }

    public function pulang_awal() {
        return view('laporan/pulang_awal');
    }

    public function scan_kerja_1x() {
        return view('laporan/scan_kerja_1x');
    }

    public function lembur() {
        return view('laporan/lembur');
    }

    public function istirahat_lebih() {
        return view ('laporan/istirahat_lebih');
    }

    public function rekap_tambahan() {
        return view('laporan/rekap_tambahan');
    }

    public function scan_diluar_jadwal() {
        return view('laporan/scan_diluar_jadwal');
    }

    public function datang_terlambat_aktual() {
        return view('laporan/datang_terlambat_aktual');
    }

    public function pulang_awal_aktual() {
        return view('laporan/pulang_awal_aktual');
    }

    public function kartu_shift() {
        return view('laporan/kartu_shift');
    }

    public function rincian_tahunan() {
        return view('laporan/rincian_tahunan');
    }

    public function listuser()
    {
      $users = \App\userlist::all();
      return view('pengguna/user',['users'=>$users]);
    }





}
