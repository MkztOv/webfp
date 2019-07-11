<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('pegawai/aktif');
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







}
