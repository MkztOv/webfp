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
    <div class="card-box">
      <div class="box">
        <div class="box-body">
          <form action="{{url('/data_scanlog')}}" method="GET">
            <input type="text" name="cari" placeholder="Cari pin.." value="{{ old('cari') }}">
            <input type="submit" value="CARI">
          </form>
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
                   <tbody>
                     {{--Comment: ini utk mengecek role user = admin? --}}
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
                     @elseif(auth()->user()->role == 'pkl' && auth()->user()->role == 'staff')
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
                     @endif
                   </tbody>
                 </table>
               </div>
               {{ $kehadiran->links() }}
             </div>
           </div>
             <br/>
         </div>
     </div>
 </div>

</section>
@endsection
