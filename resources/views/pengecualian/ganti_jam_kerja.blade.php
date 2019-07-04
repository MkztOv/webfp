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
            <a href="{{url('/gantijam')}}">Pengecualian</a>
        </li>
        <li class="active">
            <a href="{{url('/gantijam')}}">Ganti Jam Kerja</a>
        </li>
    </ol>
</section>

<section>
<body>
 
 <div class="container">
     <div class="card">
         <div class="card-body">
             

             <h3>Ganti Jam Kerja</h3>
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
                     <th style="border-style: solid;border-color: black">Jam Kerja Asal</th>
                     <th style="border-style: solid;border-color: black">Jam Kerja Pengganti</th>
                     <th style="border-style: solid;border-color: black">Keterangan</th>
                     
                 </tr>
                 
                 <tr>
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