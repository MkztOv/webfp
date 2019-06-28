@extends('layout.home')
@section('konten_header')
<section class="content-header">
      <h1>
        Absensi
        <!-- <small>Version 2.0</small> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Absensi pegawai</li>
      </ol>
    </section>
@endsection

@section('konten')
<!-- ini header content -->
<!-- <section class="content header">
    <h1>Hai!</h1>
</section> -->

<!-- ini main content -->
<section class="content container-fluid" style="padding: 15px;">
    <!-- <section class="content-header">
        <h2>Hai</h2>
    </section> -->
    <div class="box">
        <div class="box-header with-border" style="background-color: grey;">
            <h3 class="box-title">Ini judul</h3>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
          Ini bagian box-body (contoh template)
        </div>
        <div class="box-footer">
          Footer
        </div>
    </div>
</section>
@endsection