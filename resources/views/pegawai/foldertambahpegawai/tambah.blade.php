@extends('layouts.applogin')

@section('content')
<section class="content-header">
  <h1></h1> <small>Tambah pegawai</small>
    <ol class="breadcrumb">
        <li>
          <a href="{{url('/home')}}"><i class="fa fa-home"></i>Home</a>
        </li>
        <li>
          <a href="{{url('/aktif')}}">Pegawai</a>
        </li>
        <li>
          <a href="{{url('/aktif')}}">Aktif</a>
        </li>
        <li>
          <a class="active" href="{{url('/tambah')}}">Tambah pegawai</a>
        </li>
    </ol>
</section>

<section>
<body>

	<div class="container-fluid">
		<div class="card">
			<div class="card-body">
				<h3>Tambah Pegawai Baru</h3>

    <a class="btn btn-info btn-sm" href="{{url('/aktif')}}">Kembali</a>
    <br/>
    <br/>

    <form action="" method="post">

        {{ csrf_field()}}

    <div class="form-group">
    <label for="name">PIN</label> <br/>
    <input type="text" name="pin" required="requered"> <br/>
    </div>

    <div class="form-group">
    <label for="name">Nama</label> <br/>
    <input type="text" name="nama" required="requered"> <br/>
    </div>

    <div class="form-group">
    <label for="name">Jadwal Kerja</label> <br/>
    <input type="text" name="jadwal" required="requered"> <br/>
    </div>

    <div class="form-group">
    <label for="name">Tgl. Mulai Jadwal</label> <br/>
    <input type="text" name="tglmulai" required="requered"> <br/>
    </div>

        <input class="btn btn-success btn-sm" type="submit" value="Simpan Data">

    </form>
			</div>
		</div>
	</div>
</section>
@endsection
