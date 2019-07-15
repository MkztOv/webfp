<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
    public function index()
    {
      // $pegawai = DB::table('pegawai')->paginate(10);
      // return view ('pegawai.aktif', ['pegawai'=>$pegawai]);
    }

    public function tambah(){
      return view('pegawai.foldertambahpegawai.tambah');
    }

    public function aktif_v()
    {

      // $pegawai_a = DB::select('call VIEW_P_AKTIF();');
      // $model = New App\PegawaiAktif();
      $pegawai_a = DB::select('call VIEW_P_AKTIF()');
      return view ('pegawai.foldertambahpegawai.pg_aktif',['pegawai'=>$pegawai_a]);
      // dump($pegawai_a);

    }

}
