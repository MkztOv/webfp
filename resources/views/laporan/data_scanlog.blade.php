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
            <a href="{{url('/data_scanlog')}}">Data Scanlog</a>
        </li>
    </ol>
</section>

<section>
<body>

    <div class="box">
        <div class="box-body">

            <div class="col-3">
                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Action
                  <span class="fa fa-caret-down"></span></button>
                    <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                </ul>
            </div>

            <div class="col-3">
                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Action
                  <span class="fa fa-caret-down"></span></button>
                        <ul class="dropdown-menu">
                          <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </div>

            <div class="col-3">
                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Action
                  <span class="fa fa-caret-down"></span></button>
                        <ul class="dropdown-menu">
                          <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </div>



    </div>
    </div>


 <div class="container-fluid">
     <div class="card">
         <div class="card-body">
           <div class="box">
             <div class="box-header">
               <h3>Data Scanlog</h3>

             </div>
             <div class="box-body">
               <div style="overflow-x:auto;">
                 <table class="table table-bordered">
                   <tr>
                     <th>Tanggal Scan</th>
                     <th>Tanggal</th>
                     <th>Jam</th>
                     <th>PIN</th>
                     <th>NIP</th>
                     <th>Nama</th>
                     <th>Jabatan</th>
                     <th>Departement</th>
                     <th>Kantor</th>
                     <th>Verifikasi</th>
                     <th>I/O</th>
                     <th>Workcode</th>
                     <th>SN</th>
                     <th>Mesin</th>
                     <th>Koneksi</th>
                     <th>IP Address</th>

                   </tr>
                   
                   <tr>
                     <th></th>
                     <th></th>
                     <th></th>
                     <th></th>
                     <th></th>
                     <th></th>
                     <th></th>
                     <th></th>
                     <th></th>
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

             </div>
           </div>

             <br/>


         </div>
     </div>
 </div>

</section>
@endsection
