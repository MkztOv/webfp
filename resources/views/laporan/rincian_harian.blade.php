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
            <a href="{{url('/rincian_harian')}}">Rincian Harian</a>
        </li>
    </ol>
</section>

<section>
<body>
 
 <div class="container-fluid">
     <div class="card">
         <div class="card-body">
             
             <h3>Rincian Harian</h3>
             
             <br/>

              <div style="overflow-x:auto;">
             <table class="table table-bordered">
                 <tr>
                     <th style="border-style: solid;border-color: black">Tanggal</th>
                     <th style="border-style: solid;border-color: black">Jadwal</th>
                     <th style="border-style: solid;border-color: black">Jam Kerja</th>
                     <th style="border-style: solid;border-color: black">Valid</th>

                     <th style="border-style: solid;border-color: black">PIN</th>
                     <th style="border-style: solid;border-color: black">NIP</th>
                     <th style="border-style: solid;border-color: black">Nama</th>
                     <th style="border-style: solid;border-color: black">Jabatan</th>
                     <th style="border-style: solid;border-color: black">Departement</th>
                     <th style="border-style: solid;border-color: black">Kantor</th>
                     
                     <th style="border-style: solid;border-color: black">Libur Umum</th>
                     <th style="border-style: solid;border-color: black">Libur Rutin</th>
                     <th style="border-style: solid;border-color: black">Lembur</th>
                     <th style="border-style: solid;border-color: black">Scan Masuk</th>
                     <th style="border-style: solid;border-color: black">Izin Terlambat</th>
                     <th style="border-style: solid;border-color: black">Terlambat</th>
                     <th style="border-style: solid;border-color: black">Scan Istirahat 1</th>
                     <th style="border-style: solid;border-color: black">Scan Istirahat 2</th>
                     <th style="border-style: solid;border-color: black">Istirahat</th>
                     <th style="border-style: solid;border-color: black">Lembur Istirahat</th>
                     <th style="border-style: solid;border-color: black">Izin Pulang Awal</th>
                     <th style="border-style: solid;border-color: black">Pulang Awal</th>
                     <th style="border-style: solid;border-color: black">Scan Pulang</th>
                     <th style="border-style: solid;border-color: black">Durasi</th>
                     <th style="border-style: solid;border-color: black">Dihitung</th>
                     <th style="border-style: solid;border-color: black">Lebur Akhir</th>
                     <th style="border-style: solid;border-color: black">Keterangan</th>
      
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
