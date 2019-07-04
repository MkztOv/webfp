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
            <a href="{{url('/tukarjam')}}">Pengecualian</a>
        </li>
        <li class="active">
            <a href="{{url('/tukarjam')}}">Tukar Jam Kerja</a>
        </li>
    </ol>
</section>

<section>
<body>
 
 <div class="container">
     <div class="card">
         <div class="card-body">
             

             <h3>Tukar Jam Kerja</h3>
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
                     <th style="border-style: solid;border-color: black">PIN 1</th>
                     <th style="border-style: solid;border-color: black">Nama 1</th>
                     <th style="border-style: solid;border-color: black">Alias 1</th>
                     <th style="border-style: solid;border-color: black">Jam Kerja 1</th>
                     <th style="border-style: solid;border-color: black">PIN 2</th>
                     <th style="border-style: solid;border-color: black">Nama 2</th>
                     <th style="border-style: solid;border-color: black">Alias 2</th>
                     <th style="border-style: solid;border-color: black">Jam Kerja 2</th>
                     <th style="border-style: solid;border-color: black">Alasan</th>
                     
                     
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