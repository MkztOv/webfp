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
            <a href="{{url('/jadwallembur')}}">Pengecualian</a>
        </li>
        <li class="active">
            <a href="{{url('/jadwallembur')}}">Penjadwalan Lembur</a>
        </li>
    </ol>
</section>

<section>
<body>
 
 <div class="container">
     <div class="card">
         <div class="card-body">
             

             <h3>Penjadwalan Lembur</h3>
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
                     <th style="border-style: solid;border-color: black">Tanggal</th>
                     <th style="border-style: solid;border-color: black">PIN</th>
                     <th style="border-style: solid;border-color: black">Nama</th>
                     <th style="border-style: solid;border-color: black">Alias</th>
                     <th style="border-style: solid;border-color: black">Jam Mulai</th>
                     <th style="border-style: solid;border-color: black">Jam Selesai</th>
                     <th style="border-style: solid;border-color: black">Durasi Minimal</th>
                     <th style="border-style: solid;border-color: black">Durasi Maksimal</th>
                     <th style="border-style: solid;border-color: black">Keperluan</th>
                     <th style="border-style: solid;border-color: black">Jenis</th>
                     
                     
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