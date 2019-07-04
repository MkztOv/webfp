@extends('layouts.applogin')
@section('content')
<section class="content-header">
  <h1>Detail Pegawai</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{url('/home')}}"><i class="fa fa-home"></i>Home</a>
        </li>
        <li>
            <a href="{{url('/aktif')}}">Pegawai</a>
        </li>
        <li class="active">
            <a href="{{url('/detail_pegawai')}}">Detail pegawai</a>
        </li>
    </ol>
</section>
<section>

<body>
	<div class="container">
		<div class="card">
			<div class="card-body">
				<br/>
                <div>
                <a class="btn btn-success btn-sm" href="/#">Foto Pegawai</a>
                <a href="http://">clear filter data</a>
                <a class="btn btn-success btn-sm" href="/#">Export</a>
                <a class="btn btn-success btn-sm" href="/#">Cetak</a>
                </div>

                <br/>
                <br/>
                <div style="overflow-x:auto;">
                <table class="table table-bordered">
				<tr>
                        <th style="text-align:center" colspan ="14" >Detail Pegawai</th>
                        <th style="text-align:center" colspan="3">Nama</th>
                </tr>
                <tr>
                    <th>PIN</th>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Alias</th>
                    <th>Jenis Kelamin</th>
                    <th>Pend. Terakhir</th>
                    <th>Golongan Darah</th>
                    <th>Status Pernikahan</th>
                    <th>Agama</th>
                    <th>Jumlah Anak</th>
                    <th>Alamat</th>
                    <th>Nama Bank</th>
                    <th>Nama Rekening</th>
                    <th>No. Rekening</th>
                    <th>Nama</th>
                    <th>No. Telpon</th>
                    <th>Hubungan</th>

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
