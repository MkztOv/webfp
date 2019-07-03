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
    public function pegawai_aktif()
    {
        return view('tampilan/pegawai/pegawai_aktif');
    }

    public function aktif(){
        return view('pegawai/aktif');
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

}
