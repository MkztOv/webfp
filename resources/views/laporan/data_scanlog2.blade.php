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
    <!-- if(auth()->user()->role == 'admin')
    <div class="container-fluid">
      <div class="card">
        <div class="card-body">
          <div class="box">
            <div class="box-body">
              <form action="{{url('/data_scanlog2')}}" method="POST" role="search">
                csrf_field()}}
                <input type="text" class="form-control" name="cari" placeholder="Cari pin user.." >
                <input type="submit" value="CARI">
              </form>
            </div>
            if(session('status'))
            <div class="alert alert-warning alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <i class="icon fa fa-warning"></i>Tidak ada data yang dicari
            </div>
            endif
          </div>
        </div>
    </div>

  </div>
  endif -->


        <!-- <div class="box-body">

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
                </div> -->


 <div class="container-fluid">
     <div class="card">
         <div class="card-body">
           <div class="box">
             <div class="box-header">
               <h3>Data Scanlog</h3>
             </div>
             <div class="box-body">
               <div style="overflow-x:auto;">
                 <!-- if(isset($kehadiran)) -->
                 <table class="table table-bordered">
                   <thead>
                     <tr>
                       <th>Tanggal Scan</th>
                       <th>Tanggal</th>
                       <th>Jam</th>
                       <th>PIN</th>
                       <!-- <th>NIP</th> -->
                       <!-- <th>Nama</th> -->
                       <!-- <th>Jabatan</th> -->
                       <!-- <th>Departement</th> -->
                       <!-- <th>Kantor</th> -->
                       <!-- <th>Verifikasi</th> -->
                       <!-- <th>I/O</th> -->
                       <!-- <th>Workcode</th> -->
                       <th>total scan</th>
                       <!-- <th>Mesin</th> -->
                       <!-- <th>Koneksi</th> -->
                       <!-- <th>IP Address</th> -->
                     </tr>
                   </thead>
                   {{--Comment: ini utk mengecek role user = admin? --}}
                   <tbody>
                      @if(auth()->user()->role == 'admin')
                        @foreach($logscan as $ls)
                     <tr>
                       <td>{{$ls->scan_date}}</th>
                       <td>{{date('j/M/Y',strtotime($ls->scan_date))}}</td>
                       <!-- <td>$ls->scan_date->format('d M Y')}}</td> -->
                       <!-- <td></td> -->
                       <td>{{ date('H:i:s',strtotime($ls->scan_date))}}</td>
                       <td>{{$ls->pin}}</td>

                          @foreach($logscancount1 as $lsc)
                              <td>{{$lsc->count()}}</td>
                          @endforeach
                       <!-- <td></td>
                       <td></td>
                       <td></td>
                       <td></td>
                       <td></td>
                       <td></td>
                       <td></td>
                       <td></td>
                       <td></td>
                       <td></td>
                       <td></td> -->
                     </tr>
                        @endforeach
                      <!-- endif -->

                   </tbody>
                 </table>
                 {{$logscan->links()}}
                 <!-- $kehadiran->links() -->
                  <!-- $kehadiran->render() !!} -->
                 <!-- else -->
                 <!-- $message }} -->
                 <!-- <p><b>Total kehadiran pegawai $ls->pin}} di Bulan ini: </b>$logscancount}} Kali</p> -->
                 @endif

               </div>
             </div>
           </div>
             <br/>
         </div>
     </div>
 </div>

</section>
@endsection
