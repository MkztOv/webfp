@extends('layouts.applogin')

@section('content')
<!-- ini untuk menu, ini muncul ketika link pada sidebar diklik -->

<section class="content-header">
  <h1>
        Menu pertama
        <small>merupakan menu absensi</small>
  </h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{url('/home')}}"><i class="fa fa-home"></i> Home</a>
        </li>
        <li class="active">
            <a href="{{url('/menu1')}}"> Menu 1</a>
        </li>
    </ol>
</section>
<section class="content">
<i>isi contentnya jangan lupa</i>
</section>
@endsection
