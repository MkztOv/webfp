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
            <a href="{{url('/gantijadwal_perbagian')}}">Pengecualian</a>
        </li>
        <li class="active">
            <a href="{{url('/gantijadwal_perbagian')}}">Ganti Jadwal Kerja per Bagian</a>
        </li>
    </ol>
</section>

<section>
<body>

 <div class="container-fluid">
     <div class="card">
         <div class="card-body">


             <h3>Ganti Jadwal Kerja per Bagian</h3>
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
                     <th>Tanggal Awal</th>
                     <th>Tanggal Akhir</th>
                     <th>Jabatan</th>
                     <th>Departemen</th>
                     <th>Kantor</th>
                     <th>Jadwal Pengganti</th>
                     <th>Keterangan</th>

                 </tr>

                 <tr>
                     <th></th>
                     <th></th>
                     <th></th>
                     <th></th>
                     <th></th>
                     <th></th>
                     <th></th>

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
