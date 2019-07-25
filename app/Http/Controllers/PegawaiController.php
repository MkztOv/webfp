<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \DB;

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
      $page = Input::get('page', 1);
      $pageSize = 2;
      $results = DB::select(DB::raw('CALL VIEW_P_AKTIF()'));
      $offset = ($page * $pageSize) - $pageSize;
      $data = array_slice($results, $offset, $pageSize, true);
      $results = new \Illuminate\Pagination\LengthAwarePaginator($data, count($data), $pageSize, $page);
      // $pegawai_a = DB::select('call VIEW_P_AKTIF();');
      // $model = New App\PegawaiAktif();

      // return view ('pegawai.foldertambahpegawai.pg_aktif',['pegawai_aktif'=>$pegawai_a]);

      // dump($pegawai_a);
      // $pegawai_a = DB::select('CALL VIEW_P_AKTIF()');
      return view ('pegawai.foldertambahpegawai.pg_aktif',compact('results')));
// ['results'=>$pegawai_a]
    }

}
