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
            <a href="{{url('/cuti_pribadi')}}">Cuti Pribadi</a>
        </li>
    </ol>
</section>

<section>
<body>
 
 <div class="container-fluid">
     <div class="card">
         <div class="card-body">
             
             <h3>Cuti Pribadi</h3>
             
             <br/>

              <div style="overflow-x:auto;">
             <table class="table table-bordered">
                 <tr>
                    <th style="text-align:center" colspan ="6">Pegawai</th>
                    <th style="text-align:center" colspan="2">Perhitungan Cuti Normatif</th>
                    
                </tr>
                 <tr>
                     
                     <th style="border-style: solid;border-color: black">PIN</th>
                     <th style="border-style: solid;border-color: black">NIP</th>
                     <th style="border-style: solid;border-color: black">Nama</th>
                     <th style="border-style: solid;border-color: black">Tgl Awal</th>
                     <th style="border-style: solid;border-color: black">Tgl Akhir</th>
                     <th style="border-style: solid;border-color: black">Jatah</th>
                     <th style="border-style: solid;border-color: black">Hutan Tahun Lalu</th>
                     <th style="border-style: solid;border-color: black">Jabatan</th>
                     <th style="border-style: solid;border-color: black">Departement</th>
                     <th style="border-style: solid;border-color: black">Kantor</th>
                     <th style="border-style: solid;border-color: black">Tanggal</th>
      
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
                     
                                          
                 </tr>
                 
             </table>
             </div>

         </div>
     </div>
 </div>

</section>
@endsection
