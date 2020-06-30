@extends('layouts.master')
@section('tittle')
Data Perawat
@endsection
@section('content')
    <section class="content-header">
        <h1>
          Data Perawat
          <small>Rumah Sakit XYZ</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i>Home</a></li>
            <li class="active"><i class="fa fa-user"></i>Data Perawat</li>
        </ol>
      </section>
      <!-- Main content -->
        <div class="col-md-6">
            <div class="box box-primary">
                <form action="/perawat/{{ $perawat->id }}/update" role="form" method="POST">
                    <div class="modal-body">
                        @csrf
                        <div class="form-group">
                          <label>Nama</label>
                          <input name="nama" type="text" class="form-control" value="{{ $perawat->nama }}">
                        </div>
                        <div class="form-group">
                            <label>Tanggal lahir</label>
                            <input name="tanggal_lahir" type="date" class="form-control" value="{{ $perawat->tanggal_lahir }}">
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <select name="jenis_kelamin" class="form-control">
                                <option value="Pria" @if($perawat->jenis_kelamin=='Pria') selected @endif>Pria</option>
                                <option value="Wanita" @if($perawat->jenis_kelamin=='Wanita') selected @endif>Wanita</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Agama</label>
                            <select name="agama" class="form-control">
                                <option value="buddha" @if($perawat->agama=='buddha') selected @endif>Buddha</option>
                                <option value="hindu" @if($perawat->agama=='hindu') selected @endif>Hindu</option>
                                <option value="islam" @if($perawat->agama=='islam') selected @endif>Islam</option>
                                <option value="katolik" @if($perawat->agama=='katolik') selected @endif>Katolik</option>
                                <option value="konghuchu" @if($perawat->agama=='konghuchu') selected @endif>Konghu Chu</option>
                                <option value="kristen" @if($perawat->agama=='kristen') selected @endif>Kristen</option>
                            </select>
                        </div>
                        <!-- textarea -->
                        <div class="form-group">
                          <label>Alamat</label>
                          <textarea name="alamat" class="form-control" rows="3">{{ $perawat->alamat }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Nomor KTP</label>
                            <input name="nik" type="text" class="form-control" value="{{ $perawat->nik }}">
                        </div>
                        <div class="form-group">
                            <label>Spesialis</label>
                            <input name="spesialis" type="text" class="form-control" value="{{ $perawat->spesialis }}">
                        </div>
                        <a href="/perawat/{{ $perawat->id }}/detail" class="btn btn-primary btn-sm" onclick="return confirm('Apakah anda ingin kembali ke halaman sebelumnya?')">Kembali</a>
                        <button type="submit" class="btn btn-warning pull-right btn-sm" onclick="return confirm('Apakah anda ingin memperbarui data?')">Simpan Data</button>
                    </div>
                </form>
            </div>
        </div>
      <!-- /.content -->
@endsection
