@extends('layouts.applogin')

@section('content')
<!-- ini untuk menu, ini muncul ketika link pada sidebar diklik -->

<section class="content-header">
  <h1>
        LAPORAN

  </h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{url('/home')}}"><i class="fa fa-home"></i>Home</a>
        </li>
        <li>
            <a href="{{url('/home')}}">Laporan</a>
        </li>
        <li class="active">
            <a href="{{url('/rekap_periode')}}">Rekap Periode</a>
        </li>
    </ol>
</section>

<section>
<body>
 
 <div class="container-fluid">
     <div class="card">
         <div class="card-body">
             
             <h3>Rekap Periode</h3>
             
             <br/>

              <div style="overflow-x:auto;">
             <table class="table table-bordered">

                <tr>
                    <th style="text-align:center" colspan ="8">Pegawai</th>
                    <th style="text-align:center" colspan="2">Kehadiran</th>
                    <th style="text-align:center" colspan="2">Datang Terlambat</th>
                    <th style="text-align:center" colspan="2">Datang Terlambat</th>
                    <th style="text-align:center" colspan="2">Pulang Awal</th>
                    <th style="text-align:center" colspan="2">Istirahat Lebih</th>
                    <th style="text-align:center" colspan="2">Scan 1x Kerja</th>
                    <th style="text-align:center" colspan="3">Lembur</th>

                </tr>

                 <tr>
                     
                     <th style="border-style: solid;border-color: black">ID</th>
                     <th style="border-style: solid;border-color: black">PIN</th>
                     <th style="border-style: solid;border-color: black">NIP</th>
                     <th style="border-style: solid;border-color: black">Nama</th>
                     <th style="border-style: solid;border-color: black">Jabatan</th>
                     <th style="border-style: solid;border-color: black">Departement</th>
                     <th style="border-style: solid;border-color: black">Kantor</th>
                     <th style="border-style: solid;border-color: black">Izin Libur</th>
                     
                     <th style="border-style: solid;border-color: black">Jml</th>
                     <th style="border-style: solid;border-color: black">Jam : Menit</th>

                     <th style="border-style: solid;border-color: black">Jml</th>
                     <th style="border-style: solid;border-color: black">Jam : Menit</th>

                     <th style="border-style: solid;border-color: black">Jml</th>
                     <th style="border-style: solid;border-color: black">Jam : Menit</th>

                     <th style="border-style: solid;border-color: black">Jml</th>
                     <th style="border-style: solid;border-color: black">Jam : Menit</th>

                     <th style="border-style: solid;border-color: black">Jml</th>
                     <th style="border-style: solid;border-color: black">Jam : Menit</th>

                     <th style="border-style: solid;border-color: black">Masuk</th>
                     <th style="border-style: solid;border-color: black">Keluar</th>

                     <th style="border-style: solid;border-color: black">Jam</th>
                     <th style="border-style: solid;border-color: black">Menit</th>
                     <th style="border-style: solid;border-color: black">Scan 1x</th>
                     
      
                 </tr>
                 
                 <tr>
                     
                     <th style="border-style: solid;border-color: black"></th>
                     <th style="border-style: solid;border-color: black"></th>
                     <th style="border-style: solid;border-color: black"></th>
                     <th style="border-style: solid;border-color: black"></th>
                     <th style="border-style: solid;border-color: black"></th>
                     <th style="border-style: solid;border-color: black"></th>
                     <th style="border-style: solid;border-color: black"></th>
                     <th style="border-style: solid;border-color: black"></th>

                     <th style="border-style: solid;border-color: black"></th>
                     <th style="border-style: solid;border-color: black"></th>

                     <th style="border-style: solid;border-color: black"></th>
                     <th style="border-style: solid;border-color: black"></th>

                     <th style="border-style: solid;border-color: black"></th>
                     <th style="border-style: solid;border-color: black"></th>

                     <th style="border-style: solid;border-color: black"></th>
                     <th style="border-style: solid;border-color: black"></th>

                     <th style="border-style: solid;border-color: black"></th>
                     <th style="border-style: solid;border-color: black"></th>

                                          
                 </tr>
                 
             </table>
             </div>

         </div>
     </div>
 </div>

</section>
@endsection
