<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
    public function index()
    {
      $pegawai = DB::table('pegawai')->paginate(10);
      return view ('pegawai.foldertambahpegawai.tambah_pegawai', ['pegawai'=>$pegawai]);
    }
}
