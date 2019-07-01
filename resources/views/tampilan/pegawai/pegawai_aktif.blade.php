@extends('layouts.applogin')

@section('content')
<!-- ini untuk menu, ini muncul ketika link pada sidebar diklik -->

<section class="content-header">
  <h1>
        Pegawai Aktif

  </h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{url('/home')}}"><i class="fa fa-home"></i>Home</a>
        </li>
        <li>
            <a href="{{url('/pegawai_aktif')}}">Pegawai</a>
        </li>
        <li class="active">
            <a href="{{url('/pegawai_aktif')}}">Aktif</a>
        </li>
    </ol>
</section>
<!-- akhir konten header -->
<section class="content">
  <i>isi contentnya jangan lupa</i>
  <br/>
  <div style="overflow-x:auto;">
    <table class="table table-bordered"style="border-color">
      <tr>
        <th colspan="3" style="text-align:center">header</th>
        <!-- <td>1</td> -->
      </tr>
      <tr>
        <td>1</td>
        <td>2</td>
        <td>3</td>
      </tr>
      <tr>
        <td>1</td>
        <td>2</td>
        <td>3</td>
      </tr>
    </table>
  </div>



</section>
@endsection
