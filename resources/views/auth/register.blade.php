<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Registration Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('bower_components/Ionicons/css/ionicons.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/AdminLTE.min.css')}}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="../../index2.html"><b>Admin</b>LTE</a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Tambah User baru</p>

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

    <form action="{{ route('register') }}" method="POST">
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
        <!-- /.col -->
      </div>
    </form>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- jQuery 3 -->
<script src="{{ asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
</body>
</html>
