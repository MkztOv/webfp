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
            <a href="{{url('/izin_personal')}}">Pengecualian</a>
        </li>
        <li class="active">
            <a href="{{url('/izin_personal')}}">Izin, Terlambat, Cuti - PERSONAL</a>
        </li>
    </ol>
</section>

<section>
<body>
 
 <div class="container">
     <div class="card">
         <div class="card-body">
             

             <h3>Izin, Terlambat, Cuti - PERSONAL</h3>
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
                     <th style="border-style: solid;border-color: black">PIN</th>
                     <th style="border-style: solid;border-color: black">Nama</th>
                     <th style="border-style: solid;border-color: black">Alias</th>
                     <th style="border-style: solid;border-color: black">Tanggal Izin</th>
                     <th style="border-style: solid;border-color: black">Jenis Izin</th>
                     <th style="border-style: solid;border-color: black">Cuti Normatif</th>
                     <th style="border-style: solid;border-color: black">Keterangan Izin Lain</th>
                     <th style="border-style: solid;border-color: black">Scan</th>
                     <th style="border-style: solid;border-color: black">Keluar</th>
                     <th style="border-style: solid;border-color: black">Kembali</th>
                     <th style="border-style: solid;border-color: black">Kategori Izin</th>
                     <th style="border-style: solid;border-color: black">Catatan</th>
                     <th style="border-style: solid;border-color: black">Disetujui</th>
                     <th style="border-style: solid;border-color: black">Keterangan Status</th>
                     <th style="border-style: solid;border-color: black">Tanggal Pengajuan</th>
                     
                     

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
                     
                 </tr>
                 
             </table>
             </div>
             

             <br/>
             
             <div>
             <a class="btn btn-success btn-sm" href="/#">Setuju/Tidak</a>                         
             </div>

             <br/>

             
         </div>
     </div>
 </div>

</section>
@endsection