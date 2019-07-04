@extends('layouts.applogin')

@section('content')
<!-- ini untuk menu, ini muncul ketika link pada sidebar diklik -->

<section class="content-header">
  <h1>Pegawai Segera Habis Kontrak</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{url('/home')}}"><i class="fa fa-home"></i>Home</a>
        </li>
        <li>
            <a href="{{url('/aktif')}}">Pegawai</a>
        </li>
        <li class="active">
            <a href="{{url('/habis_kontrak')}}">Habis Kontrak</a>
        </li>
    </ol>
</section>

<section>
  <div class="container">
		<div class="card">
			<div class="card-body">
				<br/>
          <div>
          <a class="btn btn-success btn-sm" href="/#">Tambah Pegawai</a>
          <a class="btn btn-success btn-sm" href="/#">Tambah Pegawai</a>
          <a href="http://">clear filter data</a>
          <a class="btn btn-success btn-sm" href="/#">Import</a>
          <a class="btn btn-success btn-sm" href="/#">Export</a>
          <a class="btn btn-success btn-sm" href="/#">Cetak</a>
          <a class="btn btn-success btn-sm" href="/#">Cetak Pegawai Kontrak</a>
          </div>
          <br/>
          <br/>
          <div style="overflow-x:auto;">
          <table class="table table-bordered">
					<tr>
  					<th>Pilih</th>
  					<th>PIN</th>
  					<th>NIP</th>
  					<th>Nama</th>
  					<th>Jadwal Kerja</th>
            <th>Tgl. Mulai Jadwal</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Jabatan</th>
            <th>Departemen</th>
            <th>Kantor</th>
            <th>Password</th>
            <th>RFID</th>
            <th>No. Telp</th>
            <th>Privilage</th>
            <th>Status Pegawai</th>
            <th>FP ZK</th>
            <th>FP Neo</th>
            <th>FP Revo</th>
            <th>FP Livo</th>
            <th>FP UareU</th>
            <th>Face</th>
            <th>Tgl. Masuk Kerja</th>
            <th>Tgl. Akhir Kerja</th>
          </tr>
          <tr>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
          </tr>
        </table>
      </div>
      <br/>
      <br/>
    </div>
  </div>
</div>


</body>
</section>

@endsection
