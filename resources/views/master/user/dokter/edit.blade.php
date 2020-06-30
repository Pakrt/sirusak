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
        <div class="col-md-6">
            <div class="box box-primary">
                <form action="/dokter/{{ $dokter->id }}/update" role="form" method="POST">
                    <div class="modal-body">
                        @csrf
                        <div class="form-group">
                          <label>Nama</label>
                          <input name="nama" type="text" class="form-control" value="{{ $dokter->nama }}">
                        </div>
                        <div class="form-group">
                            <label>Tanggal lahir</label>
                            <input name="tanggal_lahir" type="date" class="form-control" value="{{ $dokter->tanggal_lahir }}">
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <select name="jenis_kelamin" class="form-control">
                                <option value="Pria" @if($dokter->jenis_kelamin=='Pria') selected @endif>Pria</option>
                                <option value="Wanita" @if($dokter->jenis_kelamin=='Wanita') selected @endif>Wanita</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Agama</label>
                            <select name="agama" class="form-control">
                                <option value="buddha" @if($dokter->agama=='buddha') selected @endif>Buddha</option>
                                <option value="hindu" @if($dokter->agama=='hindu') selected @endif>Hindu</option>
                                <option value="islam" @if($dokter->agama=='islam') selected @endif>Islam</option>
                                <option value="katolik" @if($dokter->agama=='katolik') selected @endif>Katolik</option>
                                <option value="konghuchu" @if($dokter->agama=='konghuchu') selected @endif>Konghu Chu</option>
                                <option value="kristen" @if($dokter->agama=='kristen') selected @endif>Kristen</option>
                            </select>
                        </div>
                        <!-- textarea -->
                        <div class="form-group">
                          <label>Alamat</label>
                          <textarea name="alamat" class="form-control" rows="3">{{ $dokter->alamat }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Nomor KTP</label>
                            <input name="nik" type="text" class="form-control" value="{{ $dokter->nik }}">
                        </div>
                        <div class="form-group">
                            <label>Spesialis</label>
                            <input name="spesialis" type="text" class="form-control" value="{{ $dokter->spesialis }}">
                        </div>
                        <a href="/dokter/{{ $dokter->id }}/detail" class="btn btn-primary btn-sm" onclick="return confirm('Apakah anda ingin kembali ke halaman sebelumnya?')">Kembali</a>
                        <button type="submit" class="btn btn-warning pull-right btn-sm" onclick="return confirm('Apakah anda ingin memperbarui data?')">Simpan Data</button>
                    </div>
                </form>
            </div>
        </div>
      <!-- /.content -->
@endsection
