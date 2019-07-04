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
            <a href="{{url('/izin_kolektif')}}">Pengecualian</a>
        </li>
        <li class="active">
            <a href="{{url('/izin_kolektif')}}">Izin, Terlambat, Cuti - KOLEKTIF</a>
        </li>
    </ol>
</section>

<section>
<body>
 
 <div class="container">
     <div class="card">
         <div class="card-body">
             

             <h3>Izin, Terlambat, Cuti - KOLEKTIF</h3>
             <br/>

             <div>
             <a class="btn btn-success btn-sm" href="/#">Filter Data</a>             
             <a class="btn btn-success btn-sm" href="/#">Export</a>
             <a class="btn btn-success btn-sm" href="/#">Cetak</a>
             <a class="btn btn-success btn-sm" href="/#">Cetak Pegawai Kontrak</a>
             </div>
             
             <br/>
             <br/>
             <div style="overflow-x:auto;">
             <table class="table table-bordered">
                 <tr>
                     <th style="border-style: solid;border-color: black">Tanggal Pengajuan</th>
                     <th style="border-style: solid;border-color: black">Tanggal Mulai Izin</th>
                     <th style="border-style: solid;border-color: black">Tanggal Akhir Izin</th>
                     <th style="border-style: solid;border-color: black">Jenis Izin</th>
                     <th style="border-style: solid;border-color: black">Kategori</th>
                     <th style="border-style: solid;border-color: black">Catatan</th>
                     

                 </tr>
                 
                 <tr>
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
             <a class="btn btn-success btn-sm" href="/#">Tambah</a>                         
             </div>

             <br/>

             
         </div>
     </div>
 </div>

</section>
@endsection