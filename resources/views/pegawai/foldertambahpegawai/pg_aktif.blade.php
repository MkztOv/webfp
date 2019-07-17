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
        <!-- <li>
          <a href="{{url('/pg_aktif')}}">Aktif</a>
        </li> -->
        <li>
          <a class="active" href="{{url('/tambah_pegawai')}}">Pegawai aktif</a>
        </li>
    </ol>
</section>
<section>
  <div class="container-fluid">
    <div>
      <table class="table table-bordered">
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
          <!-- <td></td>
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
          <td></td> -->
        </tr>
        @endforeach
      </table>

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
