@extends('crudbooster::admin_template')

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="box box-info">
      <div class="container-fluid">
      <div class="row">
          <div class="col-md-4 col-sm-6 col-xs-12 text-center">

              <img style="padding: 30px 0;width:200px;" src="http://smkn1banjarbaru.sch.id/wp-content/uploads/2018/07/logo-smik-besar-245x300.png" alt="..." class="img-fluid">
          </div>
          <div class="col-md-8 col-sm-6 col-xs-12">
                  <h3>
            AMPO
            <small class="text-muted">(Aplikasi Monitoring Prakerin Online)</small>
            </h3>
            <p>Aplikasi ini bertujuan memudahkan monitoring prakerin, pelaporan kegiatan prakerin dapat dilaporkan secara online</p>
          </div>
      </div>
    </div>

    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-4 col-sm-6 col-xs-12">
    <div class="info-box">
        <!-- Apply any bg-* class to to the icon to color it -->
        <span class="info-box-icon bg-green"><i class="fa fa-users"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Total Siswa</span>
          <span class="info-box-number">{{ $jml_siswa }}</span>
        </div><!-- /.info-box-content -->
      </div><!-- /.info-box -->
  </div>
  <div class="col-md-4 col-sm-6 col-xs-12">
    <div class="info-box">
        <!-- Apply any bg-* class to to the icon to color it -->
        <span class="info-box-icon bg-blue"><i class="fa fa-user"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Pembimbing Magang</span>
          <span class="info-box-number">{{ $jml_pembimbing }}</span>
        </div><!-- /.info-box-content -->
      </div><!-- /.info-box -->
  </div>
  <div class="col-md-4 col-sm-6 col-xs-12">
    <div class="info-box">
        <!-- Apply any bg-* class to to the icon to color it -->
        <span class="info-box-icon bg-yellow"><i class="fa fa-star-o"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">DUDI</span>
          <span class="info-box-number">{{ $jml_dudi }}</span>
        </div><!-- /.info-box-content -->
      </div><!-- /.info-box -->
  </div>
</div>




@endsection
