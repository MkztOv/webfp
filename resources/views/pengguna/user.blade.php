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
    @if(session('Berhasil'))
    <div class="callout callout-success">
        <strong>Data Berhasil diinput</strong>
    </div>
    @endif
    @error('role')
    <div class="callout callout-danger">
        <strong>{{$message}}</strong>
    </div>
    @enderror
    @error('password')
    <div class="callout callout-danger">
        <strong>{{$message}}</strong>
    </div>
    @enderror
    <div style="overflow-x:auto">
      <table class="table table-bordered table-hover">
        <thead>
          <tr>
            <th>Nama</th>
            <th>email</th>
            <th>role</th>
            <th>password</th>
          </tr>
        </thead>
        <tbody>
          @foreach($users as $user)
          <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->role}}</td>
            <td>{{$user->password}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
  <div class="box-footer">

    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                Tambah User
              </button>
              <div class="modal fade" id="modal-default">
                <form action="{{ url('user/create') }}" method="POST">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Default Modal</h4>
              </div>
              <div class="modal-body">
                  @csrf
                  <div class="form-group has-feedback">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autofocus placeholder="Nama Lengkap">
                    <span class="glyphicon glyphicon-user form-control-feedback">
                      @error('name')
                          <strong>{{ $message }}</strong>
                      @enderror
                    </span>
                  </div>

                  <div class="form-group has-feedback">
                      <select id="role" type="text" class="form-control @error('role') is-invalid @enderror" value="{{ old('role')}}" name="role" required autofocus>
                        <option disabled selected>Role permission</option>
                        <option value="pkl">PKL/Magang</option>
                        <option value="staff">Staff</option>
                        <option value="admin">Admin</option>
                      </select>
                      <span class="glyphicon glyphicon-tag form-control-feedback">

                      </span>
                  </div>

                  <div class="form-group has-feedback">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required placeholder="Email">
                    <span class="glyphicon glyphicon-envelope form-control-feedback">
                      @error('email')
                      <strong>{{$message}}</strong>
                      @enderror
                    </span>
                  </div>

                  <div class="form-group has-feedback">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required placeholder="Password">
                    <span class="glyphicon glyphicon-lock form-control-feedback">

                    </span>
                  </div>

                  <div class="form-group has-feedback">
                    <input id="password-confirm" type="password" class="form-control" placeholder="Retype password" name="password_confirmation" required>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                  </div>

                  <div class="row">
                    <div class="col-xs-12">
                      <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
                    </div>

                  </div>
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </form>

          </div>
        </div>

  </div>
</div>
</section>
@endsection
