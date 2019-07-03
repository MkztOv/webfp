@extends('layouts.applogin')
@section('content')
<section class="content-header">
  <h1>Pegawai Aktif</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{url('/home')}}"><i class="fa fa-home"></i>Home</a>
        </li>
        <li>
            <a href="{{url('/pegawai_aktif')}}">Pegawai</a>
        </li>
        <li class="active">
            <a href="{{url('/detail_pegawai')}}">Detail pegawai</a>
        </li>
    </ol>
</section>
<section>
  <div class="container">
    <div class="card">
      <div class="card-body">
        <div style="overflow-x:auto;">
        <table class="table table-bordered">
          <thead>
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
          </thead>
          <tbody>
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
          </tbody>
        </table>
        </div>
      </div>
    </div>
  </div>
</section>


@endsection
