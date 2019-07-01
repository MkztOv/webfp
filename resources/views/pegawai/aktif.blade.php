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

	<section>

	<div class="container">
		<div class="card">
			<div class="card-body">
				
 
				<h3>Aktif</h3>
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
                <table style="border-style: solid;border-color: black" class="table table-bordered">
					<tr style="border-style: solid;border-color: black">
						<th style="border-style: solid;border-color: black">Pilih</th>
						<th style="border-style: solid;border-color: black">PIN</th>
						<th style="border-style: solid;border-color: black">NIP</th>
						<th style="border-style: solid;border-color: black">Nama</th>
						<th style="border-style: solid;border-color: black">Jadwal Kerja</th>
                        <th style="border-style: solid;border-color: black">Tgl. Mulai Jadwal</th>
                        <th style="border-style: solid;border-color: black">Tempat Lahir</th>
                        <th style="border-style: solid;border-color: black">Tanggal Lahir</th>
                        <th style="border-style: solid;border-color: black">Jabatan</th>
                        <th style="border-style: solid;border-color: black">Departemen</th>
                        <th style="border-style: solid;border-color: black">Kantor</th>
                        <th style="border-style: solid;border-color: black">Password</th>
                        <th style="border-style: solid;border-color: black">RFID</th>
                        <th style="border-style: solid;border-color: black">No. Telp</th>
                        <th style="border-style: solid;border-color: black">Privilage</th>
                        <th style="border-style: solid;border-color: black">Status Pegawai</th>
                        <th style="border-style: solid;border-color: black">FP ZK</th>
                        <th style="border-style: solid;border-color: black">FP Neo</th>
                        <th style="border-style: solid;border-color: black">FP Revo</th>
                        <th style="border-style: solid;border-color: black">FP Livo</th>
                        <th style="border-style: solid;border-color: black">FP UareU</th>
                        <th style="border-style: solid;border-color: black">Face</th>
                        <th style="border-style: solid;border-color: black">Tgl. Masuk Kerja</th>
                        <th style="border-style: solid;border-color: black">Tgl. Akhir Kerja</th>

					</tr>
                    
                    <tr>
                        <th style="border-style: solid;border-color: black"></th>
                        <th style="border-style: solid;border-color: black"></th>
                        <th style="border-style: solid;border-color: black"></th>
                        <th style="border-style: solid;border-color: black"></th>
                        <th style="border-style: solid;border-color: black"></th>
                        <th style="border-style: solid;border-color: black"></th>
                        <th style="border-style: solid;border-color: black"></th>
                        <th style="border-style: solid;border-color: black"></th>
                        <th style="border-style: solid;border-color: black"></th>
                        <th style="border-style: solid;border-color: black"></th>
                        <th style="border-style: solid;border-color: black"></th>
                        <th style="border-style: solid;border-color: black"></th>
                        <th style="border-style: solid;border-color: black"></th>
                        <th style="border-style: solid;border-color: black"></th>
                        <th style="border-style: solid;border-color: black"></th>
                        <th style="border-style: solid;border-color: black"></th>
                        <th style="border-style: solid;border-color: black"></th>
                        <th style="border-style: solid;border-color: black"></th>
                        <th style="border-style: solid;border-color: black"></th>
                        <th style="border-style: solid;border-color: black"></th>
                        <th style="border-style: solid;border-color: black"></th>
                        <th style="border-style: solid;border-color: black"></th>
                        <th style="border-style: solid;border-color: black"></th>
                        <th style="border-style: solid;border-color: black"></th>
                    </tr>
					
				</table>

                
                </div>
				
 
				<br/>
				
				<br/>
                <a class="btn btn-success btn-sm" href="/#">v</a>
                <a class="btn btn-success btn-sm" href="/#">v</a>
                <a class="btn btn-success btn-sm" href="/#">v</a>
                <br/>
                <br/>
                <a class="btn btn-success btn-sm" href="/#">Tambah Ke daftar Pilihan</a>
                <a class="btn btn-success btn-sm" href="/#">Daftar Pilihan</a>
                <a class="btn btn-success btn-sm" href="/#">Ganti Status</a>
                <a class="btn btn-success btn-sm" href="/#">Pengecualian</a>
                <a class="btn btn-success btn-sm" href="/#">Jadwal Pegawai</a>
                <a class="btn btn-success btn-sm" href="/#">Pegawai Belum Registrasi</a>

                
			</div>
		</div>
	</div>
 
	</section>
@endsection
