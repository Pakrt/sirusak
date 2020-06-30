@extends('layouts.master')
@section('tittle')
Data Dokter
@endsection
@section('content')
    <section class="content-header">
        <h1>
          Data Dokter
          <small>Rumah Sakit XYZ</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i>Home</a></li>
            <li class="active"><i class="fa fa-user"></i>Data Dokter</li>
        </ol>
      </section>
      <!-- Main content -->
      <section class="content">
        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-body box-profile">
                  <h3 class="profile-username text-center">{{ $dokter->nama }}</h3>

                  <p class="text-muted text-center">Spesialis {{ $dokter->spesialis }}</p>

                  <ul class="list-group list-group-unbordered">
                    <li class="list-group-item">
                      <b>Tanggal Lahir</b> <span class="pull-right">{{ $dokter->tanggal_lahir }}</span>
                    </li>
                    <li class="list-group-item">
                      <b>Jenis Kelamin</b> <span class="pull-right">{{ $dokter->jenis_kelamin }}</span>
                    </li>
                    <li class="list-group-item">
                      <b>Agama</b> <span class="pull-right">{{ $dokter->agama }}</span>
                    </li>
                    <li class="list-group-item">
                      <b>Alamat</b> <span class="pull-right">{{ $dokter->alamat }}</span>
                    </li>
                    <li class="list-group-item">
                      <b>Nomor KTP</b> <span class="pull-right">{{ $dokter->nik }}</span>
                    </li>
                  </ul>
                  <div class="d-inline">
                      <form action="/dokter/{{ $dokter->id }}/delete" method="POST">
                        @method('delete')
                        @csrf
                        <a href="/dokter" class="btn btn-primary pull-left"><b>Kembali</b></a>
                        <button class="btn btn-danger pull-right" onclick="return confirm('Apakah anda ingin menghapus data ini??')"><b>Hapus</b></button>
                        <a href="/dokter/{{ $dokter->id}}/edit" class="btn btn-warning pull-right"><b>Edit</b></a>
                    </form>
                  </div>
                </div>
                <!-- /.box-body -->
              </div>
        </div>
      </section>
      <!-- /.content -->
@endsection
