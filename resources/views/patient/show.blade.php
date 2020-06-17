@extends('layouts.master')
@section('tittle')
Data User
@endsection
@section('content')
    <section class="content-header">
        <h1>
          Data Pasien
          <small>Rumah Sakit XYZ</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i>Home</a></li>
            <li class="active"><i class="fa fa-user"></i>Data Pasien</li>
        </ol>
      </section>
      <!-- Main content -->
      <section class="content">
        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-body box-profile">
                  <h3 class="profile-username text-center">{{ $pasien->nama }}</h3>

                  <p class="text-muted text-center">{{ $pasien->pekerjaan }}</p>

                  <ul class="list-group list-group-unbordered">
                    <li class="list-group-item">
                      <b>Tanggal Lahir</b> <span class="pull-right">{{ $pasien->tanggal_lahir }}</span>
                    </li>
                    <li class="list-group-item">
                      <b>Jenis Kelamin</b> <span class="pull-right">{{ $pasien->jenis_kelamin }}</span>
                    </li>
                    <li class="list-group-item">
                      <b>Agama</b> <span class="pull-right">{{ $pasien->agama }}</span>
                    </li>
                    <li class="list-group-item">
                      <b>Alamat</b> <span class="pull-right">{{ $pasien->alamat }}</span>
                    </li>
                    <li class="list-group-item">
                      <b>Status Pernikahan</b> <span class="pull-right">{{ $pasien->status }}</span>
                    </li>
                    <li class="list-group-item">
                      <b>Nomor Askes</b> <span class="pull-right">{{ $pasien->askes }}</span>
                    </li>
                    <li class="list-group-item">
                      <b>Surat Rujuk Dokter</b> <span class="pull-right">{{ $pasien->rujuk_dokter }}</span>
                    </li>
                    <li class="list-group-item">
                      <b>Surat Rujuk Rumah Sakit</b> <span class="pull-right">{{ $pasien->rujuk_rs }}</span>
                    </li>
                  </ul>
                  <div class="d-inline">
                      <form action="/pasien/{{ $pasien->id }}/delete" method="POST">
                        @method('delete')
                        @csrf
                        <a href="/pasien" class="btn btn-primary pull-left"><b>Kembali</b></a>
                        <button class="btn btn-danger pull-right" onclick="return confirm('Apakah anda ingin menghapus data ini??')"><b>Hapus</b></button>
                        <a href="/pasien/{{ $pasien->id}}/edit" class="btn btn-warning pull-right"><b>Edit</b></a>
                    </form>
                  </div>
                </div>
                <!-- /.box-body -->
              </div>
        </div>
      </section>
      <!-- /.content -->
@endsection
