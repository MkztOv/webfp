@extends('layouts.applogin')

@section('content')
<section class="content-header">
  <h1>Aktif</h1> <small>Tambah pegawai</small>
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
          <a class="active" href="{{url('/tambah_pegawai')}}">Tambah pegawai</a>
        </li>
    </ol>
</section>
<section>
  <div class="container-fluid">
    <div>
      <table class="table table-bordered">
        <tr>
          <th>ID</th>
          <th>PIN</th>
          <th>NIP</th>
          <th>Nama</th>
          <th>Alias</th>
        </tr>
        @foreach($pegawai as $p)
        <tr>
          <td>{{$p->pegawai_id}}</td>
          <td>{{$p->pegawai_pin}}</td>
          <td>{{$p->pegawai_nip}}</td>
          <td>{{$p->pegawai_nama}}</td>
          <td>{{$p->pegawai_alias}}</td>
        </tr>
        @endforeach
      </table>
      {{$pegawai->links()}}
    </div>

  </div>
</section>
<!-- <section>
  <div class="container-fluid">
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
      </table>
    </div>
  </div>
</section> -->

@endsection
