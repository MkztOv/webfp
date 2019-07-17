<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    //method Pegawai

    public function aktif(){
      $pegawai = DB::table('pegawai')->paginate(10);
      return view ('pegawai.aktif', ['pegawai'=>$pegawai]);

      // return view('pegawai/aktif');
      

    }

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






}
