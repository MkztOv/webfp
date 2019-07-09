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
             <div style="overflow-x:auto;"class="col-md-12" >
             <table class="table table-bordered">
                 <tr>
                     <th >Tanggal Pengajuan</th>
                     <th >Tanggal Mulai Izin</th>
                     <th >Tanggal Akhir Izin</th>
                     <th >Jenis Izin</th>
                     <th >Kategori</th>
                     <th >Catatan</th>


                 </tr>

                 <tr>
                     <th ></th>
                     <th ></th>
                     <th ></th>
                     <th ></th>
                     <th ></th>
                     <th ></th>

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
