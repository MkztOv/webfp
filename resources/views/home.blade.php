@extends('layouts.applogin')

@section('content')
<!-- <div class="container">
    
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Anda berhasil login!
                </div>
            </div>
        </div>
    </div>
</div> -->
<section class="content container-fluid">
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
