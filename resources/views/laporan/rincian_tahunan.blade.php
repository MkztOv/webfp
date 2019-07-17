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
            <a href="{{url('/rincian_tahunan')}}">Rincian Tahunan</a>
        </li>
    </ol>
</section>

<section>
<body>
 
 <div class="container-fluid">
     <div class="card">
         <div class="card-body">
             
             <h3>Rincian Tahunan</h3>
             
             <br/>

              <div style="overflow-x:auto;">
             <table class="table table-bordered">
                 <tr>
                     
                     <th style="border-style: solid;border-color: black">PIN</th>
                     <th style="border-style: solid;border-color: black">NIP</th>
                     <th style="border-style: solid;border-color: black">Nama</th>
                     <th style="border-style: solid;border-color: black">Jabatan</th>

                     <th style="border-style: solid;border-color: black">Departement</th>
                     <th style="border-style: solid;border-color: black">Kantor</th>
                     <th style="border-style: solid;border-color: black">Bulan</th>
                     <th style="border-style: solid;border-color: black">Tanggal</th>

                     <th style="border-style: solid;border-color: black">Libur</th>
                     <th style="border-style: solid;border-color: black">Cuti</th>
                     <th style="border-style: solid;border-color: black">Izin</th>
                     <th style="border-style: solid;border-color: black">Sakit</th>
                     <th style="border-style: solid;border-color: black">Absen</th>
                     <th style="border-style: solid;border-color: black">Cuti Normatif</th>
                     <th style="border-style: solid;border-color: black">Dinas</th>
                     <th style="border-style: solid;border-color: black">Hari Kerja</th>
                     <th style="border-style: solid;border-color: black">Tidak Hadir</th>
                     <th style="border-style: solid;border-color: black">Kehadiran</th>
      
                 </tr>
                 
                 <tr>
                                    
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
