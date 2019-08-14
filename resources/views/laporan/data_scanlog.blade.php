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
    @if(auth()->user()->role == 'admin')
    <div class="container-fluid">
      <div class="card">
        <div class="card-body">
          <div class="box">
            <div class="box-body">
              <form action="{{url('/searchScanLog')}}" method="POST" role="search">
                {{csrf_field()}}
                <input type="text" class="form-control" name="cari" placeholder="Cari pin user.." >
                <input type="submit" value="CARI">
              </form>
            </div>
            @if(session('status'))
            <div class="alert alert-warning alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <i class="icon fa fa-warning"></i>Tidak ada data yang dicari
            </div>
            @endif
          </div>
        </div>
    </div>

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
    </div>
    @endif


 <div class="container-fluid">
     <div class="card">
         <div class="card-body">
           <div class="box">
             <div class="box-header">
               <h3>Data Scanlog</h3>

             </div>
             <div class="box-body">
               <div style="overflow-x:auto;">
                 @if(isset($kehadiran))
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
                       <th>SN</th>
                       <!-- <th>Mesin</th> -->
                       <!-- <th>Koneksi</th> -->
                       <!-- <th>IP Address</th> -->
                     </tr>
                   </thead>
                   {{--Comment: ini utk mengecek role user = admin? --}}
                   <tbody>
                      @if(auth()->user()->role == 'admin')
                        @foreach($kehadiran as $k)
                     <tr>
                       <td>{{$k->scan_date}}</th>
                       <td>{{ date('l, j-F-Y',strtotime($k->scan_date))}}</th>
                       <td>{{ date('H:i:s',strtotime($k->scan_date))}}</th>
                       <td>{{$k->pin}}</th>
                       <td>{{$k->sn}}</th>
                       <!-- <th></th>
                       <th></th>
                       <th></th>
                       <th></th>
                       <th></th>
                       <th></th>
                       <th></th>
                       <th></th>
                       <th></th>
                       <th></th>
                       <th></th> -->
                     </tr>
                        @endforeach

                      {{--Comment: ini utk mengecek role user = pkl atau staff? --}}
                      @else(auth()->user()->role == 'pkl' && auth()->user()->role == 'staff')
                        @foreach($kehadiran as $k)
                    <tr>
                      <td>{{$k->scan_date}}</th>
                      <td>{{ date('j-F-Y',strtotime($k->scan_date))}}</th>
                      <td>{{ date('H:i:s',strtotime($k->scan_date))}}</th>
                      <td>{{$k->pin}}</th>
                      <td>{{$k->sn}}</th>
                      <!-- <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th> -->
                    </tr>
                        @endforeach
                      @endif

                   </tbody>
                 </table>
                 <!-- $kehadiran->links() -->
                 {!! $kehadiran->render() !!}
                 @else
                 {{ $message }}
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
