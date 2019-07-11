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
  <div class="container-fluid">
		<div class="card">
			<div class="card-body">
				<br/>
          <div>
          <a class="btn btn-success btn-sm" href="#">Tambah Pegawai</a>
          <a class="btn btn-success btn-sm" href="#">Tambah Pegawai</a>
          <a href="http://">clear filter data</a>
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
        <br/>
        <br/>
        <!-- <table class="table table-bordered">
          <tr>
            <th>Nama mobil</th>
            <th>&nbsp</th>
          </tr>
          <tr>
            <td>
              <input list="departemen">
              <datalist id="departemen">
                  <option value="HRD">
                  <option value="Keuangan">
                  <option value="Penjualan">
                  <option value="IT">
              </datalist>
            </td>
            <td>&nbsp</td>
          </tr>
        </table> -->
      </div>
      <br/>
      <br/>
      <!-- <div style="overflow-x:auto">
        <table>
          <thead>
            <tr>
              <td class="col-md-4">pertama</td>
              <td class="col-md-4">kedua</td>
              <td class="col-md-4">ketiga</td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="col-md-4"><textarea class="form-control" rows="3" id="comment"></textarea></td>
        <td class="col-md-4"><div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropdown Example
        <span class="caret"></span></button>
         <ul class="dropdown-menu">
          <li><a href="#">HTML</a></li>
          <li><a href="#">CSS</a></li>
          <li><a href="#">JavaScript</a></li>
         </ul>
         </div></td>
              <td class="col-md-4"><textarea class="form-control" rows="3" id="comment"></textarea></td>
              <td class="col-md-4"><div class="dropdown">
              <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropdown Example
              <span class="caret"></span></button>
               <ul class="dropdown-menu">
                <li><a href="#">HTML</a></li>
                <li><a href="#">CSS</a></li>
                <li><a href="#">JavaScript</a></li>
               </ul>
               </div></td>
            </tr>
          </tbody>
        </table>
      </div> -->
    </div>
  </div>
</div>


</body>
</section>

@endsection
