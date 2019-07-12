@extends('layouts.applogin')

@section('content')
<!-- ini untuk menu, ini muncul ketika link pada sidebar diklik -->

<section class="content-header">
  <h1>Pegawai Aktif</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{url('/home')}}"><i class="fa fa-home"></i>Home</a>
        </li>
        <li>
            <a href="{{url('/aktif')}}">Pegawai</a>
        </li>
        <li class="active">
            <a href="{{url('/aktif')}}">Aktif</a>
        </li>
    </ol>
</section>
<!-- akhir konten header -->

<section>

	<div class="container-fluid">
		<div class="card">
			<div class="card-body">
        <!-- <h3>Aktif</h3> -->
				<br/>
          <div>
            <a class="btn btn-success btn-sm" href="{{url('/tambah')}}">Tambah Pegawai</a>
            <!-- {{url('/tambah_pegawai')}} -->
            <a href="#">clear filter data</a>
            <a class="btn btn-success btn-sm" href="#">Import</a>
            <a class="btn btn-success btn-sm" href="#">Export</a>
            <a class="btn btn-success btn-sm" href="#">Cetak</a>
            <a class="btn btn-success btn-sm" href="#">Cetak Pegawai Kontrak</a>
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
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
            </table>
          </div>
          <br/>
          <br/>
            <a class="btn btn-success btn-sm" href="#">v</a>
            <a class="btn btn-success btn-sm" href="#">v</a>
            <a class="btn btn-success btn-sm" href="#">v</a>
            <br/>
            <br/>
            <a class="btn btn-success btn-sm" href="#">Tambah Ke daftar Pilihan</a>
            <a class="btn btn-success btn-sm" href="#">Daftar Pilihan</a>
            <a class="btn btn-success btn-sm" href="#">Ganti Status</a>
            <a class="btn btn-success btn-sm" href="#">Pengecualian</a>
            <a class="btn btn-success btn-sm" href="#">Jadwal Pegawai</a>
            <a class="btn btn-success btn-sm" href="#">Pegawai Belum Registrasi</a>
			</div>
		</div>
	</div>

	</section>
@endsection
