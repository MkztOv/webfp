@extends('layouts.applogin')

@section('content')
<section class="content-header">
  <h1>List User</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{url('/home')}}"><i class="fa fa-home"></i>Home</a>
        </li>
        <li class="active">
            <a href="{{url('/user')}}">List User</a>
        </li>
    </ol>
</section>

<section class="content">
<div class="box col-xs-12 col-md-12">
  <div class="box-header">
    <p>daftarnya sebagai berikut: </p>
  </div>
  <div class="box-body">
    <div style="overflow-x:auto">
      <table class="table table-bordered table-hover">
        <thead>
          <tr>
            <th>Nama</th>
            <th>email</th>
            <th>password</th>
          </tr>
        </thead>
        <tbody>
          @foreach($users as $user)
          <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->password}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
  <div class="box-footer">
    thx
  </div>
</div>
</section>
@endsection
