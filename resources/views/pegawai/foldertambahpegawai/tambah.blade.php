@extends('layouts.applogin')

@section('content')
<section class="content-header">
  <h1>Tambah Pegawai Baru</h1>
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

<section class="content">
<body>

	<div class="container-fluid">
		<div class="card">
			<div class="card-body">
        <a class="btn btn-info btn-sm" href="{{url('/aktif')}}">Kembali</a>
        <br/>
        <br/>
        <div class="col-md-6">
          <div class="box">
            <div class="box-body">
              <form action="" method="post">

                  {{ csrf_field()}}

              <div class="form-group">
              <label for="name">PIN</label> <br/>
              <input type="text" name="pin" required="requered" placeholder="1234"> <br/>
              </div>

              <div class="form-group">
              <label for="name">NIP</label> <br/>
              <input type="text" name="pin" required="requered" placeholder="4321"> <br/>
              </div>

              <div class="form-group">
              <label for="name">Nama</label> <br/>
              <input type="text" name="nama" required="requered" placeholder="Nama Lengkap"> <br/>
              </div>

              <div class="form-group">
              <label for="name">Jadwal Kerja</label> <br/>
              <input type="text" name="jadwal" required="requered" placeholder="Jadwal Kerja"> <br/>
              </div>

              <div class="form-group">
              <label for="name">Tgl. Mulai Jadwal Kerja</label> <br/>
              <input type="text" name="tglmulai" required="requered" placeholder="Tanggal Mulai jadwal"> <br/>
              </div>

                  <input class="btn btn-success btn-sm" type="submit" value="Simpan Data">

              </form>
            </div>

          </div>
        </div>
			</div>
		</div>
	</div>
</section>
@endsection
