<!-- isi bagian sidebar /aside -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          {{ Auth::user()->name }}
          <br/>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Sidebar header</li>
        <!-- Optionally, you can add icons to the links -->
        <!-- <li class="active"><a href="{{ url('/pegawai') }}"><i class="fa fa-link"></i> <span>Pegawai</span></a></li> -->
        <li class="treeview">
          <a href="{{ url('/aktif') }}"><i class="fa fa-link"></i><span>Pegawai</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('aktif')}}">Aktif</a></li>
            <li><a href="{{url('detail')}}">Detail pegawai</a></li>
            <li><a href="{{url('nonaktif')}}">Non Aktif</a></li>
            <li><a href="{{url('berhenti')}}">Berhenti</a></li>
            <li><a href="{{url('habis_kontrak')}}">Segera habis kontrak</a></li>
          </ul>
        </li>

        <!-- <li><a href="#"><i class="fa fa-flask"></i><span>Pengecualian</span></a></li>
        <li class="treeview"> -->

          <li class="treeview">
          <a href="{{ url('/aktif') }}"><i class="fa fa-link"></i><span>Pengecualian</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('izin_kolektif')}}">Izin, Terlambat, Cuti - KOLEKTIF</a></li>
            <li><a href="{{url('izin_personal')}}">Izin, Terlambat, Cuti - PERSONAL</a></li>
            <li><a href="{{url('gantijadwal')}}">Ganti Jadwal Kerja</a></li>
            <li><a href="{{url('gantijadwal_perbagian')}}">Ganti Jadwal Kerja per Bagian</a></li>
            <li><a href="{{url('gantijadwal_perpegawai')}}">Ganti Jadwal Kerja per Pegawai</a></li>
            <li><a href="{{url('gantijam')}}">Ganti Jam Kerja</a></li>
            <li><a href="{{url('gantijam_perbagian')}}">Ganti Jam Kerja per Bagian</a></li>
            <li><a href="{{url('gantijam_perpegawai')}}">Ganti Jam Kerja per Pegawai</a></li>
            <li><a href="{{url('tukarjam')}}">Tukar Jam Kerja</a></li>
            <li><a href="{{url('jadwallembur')}}">Penjadwalan Lembur</a></li>
            <li><a href="{{url('kerjaextra')}}">Kerja Extra per Hari</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i><span>Mesin</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">level menu a</a></li>
            <li><a href="#">level menu b</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i><span>Laporan</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">level menu a</a></li>
            <li><a href="#">level menu b</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i><span>Pengaturan</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">level menu a</a></li>
            <li><a href="#">level menu b</a></li>
          </ul>
        </li>

      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>
