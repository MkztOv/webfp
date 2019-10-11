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

           @if(auth()->user()->role == 'admin')
           <div class="box">
             <div class="box-body">
               <div style="overflow-x:auto">
               </div>
               <table class="table table-bordered">
                 <thead>
                   <tr>
                     <th>tanggal</th>
                     <th>total scan</th>
                   </tr>
                 </thead>
                 <tbody>
                   @foreach(logscancount1 as $lsc)
                   <tr>
                     <td>{{$lsc->scan_date}}</td>
                     <td>{{$lsc->count()}}</td>
                   </tr>
                   @endforeach
                 </tbody>

               </table>
                 {{$logscancount1->links()}}

             </div>

           </div>
           @endif
             <br/>
         </div>
     </div>
 </div>

</section>
@endsection
