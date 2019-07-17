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
             
             <h3>Data Scanlog</h3>
             
             <br/>

              <div style="overflow-x:auto;">
             <table class="table table-bordered">
                 <tr>
                     <th style="border-style: solid;border-color: black">Tanggal Scan</th>
                     <th style="border-style: solid;border-color: black">Tanggal</th>
                     <th style="border-style: solid;border-color: black">Jam</th>
                     <th style="border-style: solid;border-color: black">PIN</th>
                     <th style="border-style: solid;border-color: black">NIP</th>
                     <th style="border-style: solid;border-color: black">Nama</th>
                     <th style="border-style: solid;border-color: black">Jabatan</th>
                     <th style="border-style: solid;border-color: black">Departement</th>
                     <th style="border-style: solid;border-color: black">Kantor</th>
                     <th style="border-style: solid;border-color: black">Verifikasi</th>
                     <th style="border-style: solid;border-color: black">I/O</th>
                     <th style="border-style: solid;border-color: black">Workcode</th>
                     <th style="border-style: solid;border-color: black">SN</th>
                     <th style="border-style: solid;border-color: black">Mesin</th>
                     <th style="border-style: solid;border-color: black">Koneksi</th>
                     <th style="border-style: solid;border-color: black">IP Address</th>
      
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
                     <th style="border-style: solid;border-color: black"></th>

                                          
                 </tr>
                 
             </table>
             </div>

         </div>
     </div>
 </div>

</section>
@endsection
