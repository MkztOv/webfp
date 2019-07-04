@extends('layouts.applogin')

@section('content')
<!-- ini untuk menu, ini muncul ketika link pada sidebar diklik -->

<section class="content-header">
  <h1>
        PENGECUALIAN

  </h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{url('/home')}}"><i class="fa fa-home"></i>Home</a>
        </li>
        <li>
            <a href="{{url('/gantijam_perpegawai')}}">Pengecualian</a>
        </li>
        <li class="active">
            <a href="{{url('/gantijam_perpegawai')}}">Ganti Jam Kerja per Pegawai</a>
        </li>
    </ol>
</section>

<section>
<body>
 
 <div class="container">
     <div class="card">
         <div class="card-body">
             

             <h3>Ganti Jam Kerja per Pegawai</h3>
             <br/>

             <div>
             <a class="btn btn-success btn-sm" href="/#">Filter Data</a>             
             <a class="btn btn-success btn-sm" href="/#">Export</a>
             <a class="btn btn-success btn-sm" href="/#">Cetak</a>
             </div>
             
             <br/>
             <br/>
             <div style="overflow-x:auto;">
             <table class="table table-bordered">
                 <tr>
                     <th style="border-style: solid;border-color: black">Tanggal Awal</th>
                     <th style="border-style: solid;border-color: black">Tanggal Akhir</th>
                     <th style="border-style: solid;border-color: black">PIN</th>
                     <th style="border-style: solid;border-color: black">Nama</th>
                     <th style="border-style: solid;border-color: black">Alias</th>
                     <th style="border-style: solid;border-color: black">Jam Kerja Pengganti</th>
                     <th style="border-style: solid;border-color: black">Keterangan</th>
                     <th style="border-style: solid;border-color: black">Libur</th>
                     
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
                                          
                 </tr>
                 
             </table>
             </div>
             

             <br/>
             
             <div>
             <a class="btn btn-success btn-sm" href="/#">Hapus</a>                         
             </div>

             <br/>

             
         </div>
     </div>
 </div>

</section>
@endsection