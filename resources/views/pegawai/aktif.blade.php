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

<section class="content">
<div class="row">
	<div class="container-fluid col-xs-12">
		<div class="box">
			<div class="box-body">
        <!-- <h3>Aktif</h3> -->
				<!-- <br/>
        <a href="{{url('/pg_aktif')}}">pg aktif</a>
        <br/> -->
          <div>
            <a class="btn btn-success btn-sm" href="{{url('/tambah')}}">Tambah Pegawai</a>
            <!-- {{url('/tambah_pegawai')}} -->
            <a href="#">clear filter data</a>
            <div class="btn-group">
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">button dropdown
              <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
              <li><a href="#">Dropdown link</a></li>
              <li><a href="#">Dropdown link</a></li>
            </ul>
          </div>
            <a class="btn btn-success btn-sm" href="#">Import</a>
            <a class="btn btn-success btn-sm" href="#">Export</a>
            <a class="btn btn-success btn-sm" href="#">Cetak</a>
            <a class="btn btn-success btn-sm" href="#">Cetak Pegawai Kontrak</a>
          </div>

            <br/>
            <br/>
          <div style="overflow-x:auto;">
            <table class="table table-bordered table-hover">
              <thead>
              <tr>
                <th>Pegawai ID</th>
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
                <th>Tgl. Masuk Kerja</th>
                <th>Tgl. Akhir Kontrak</th>
              </tr>
            </thead>
            <tbody>
              @foreach($pegawai_a as $pa)
              <tr>
                <td>{{$pa->pegawai_id}}</td>
                <td>{{$pa->pegawai_pin}}</td>
                <td>{{$pa->pegawai_nip}}</td>
                <td>{{$pa->pegawai_nama}}</td>
                <td>{{$pa->jdw_kerja_m_name}}</td>
                <td>{{$pa->jdw_kerja_m_mulai}}</td>
                <td>{{$pa->tempat_lahir}}</td>
                <td>{{$pa->tgl_lahir}}</td>
                <td>{{$pa->pembagian1_nama}}</td>
                <td>{{$pa->pembagian2_nama}}</td>
                <td>{{$pa->pembagian3_nama}}</td>
                <td>{{$pa->pegawai_pwd}}</td>
                <td>{{$pa->pegawai_rfid}}</td>
                <td>{{$pa->pegawai_telp}}</td>
                <td>{{$pa->pegawai_privilege}}</td>
                <td>{{$pa->pegawai_status}}</td>
                <td>{{$pa->tgl_mulai_kerja}}</td>
                <td>{{$pa->kontrak_end}}</td>
              </tr>
              @endforeach
            </tbody>
            <tfoot>
              <th>Pegawai ID</th>
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
              <th>Tgl. Masuk Kerja</th>
              <th>Tgl. Akhir Kontrak</th>
            </tfoot>
            </table>

          </div>
          <div>
            {{ $pegawai_a->links() }}

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
</div>
  <br/>


	</section>
@endsection
