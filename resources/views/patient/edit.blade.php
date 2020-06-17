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
        <div class="col-md-6">
            <div class="box box-primary">
                <form action="/pasien/{{ $pasien->id }}/update" role="form" method="POST">
                    <div class="modal-body">
                        @csrf
                        <div class="form-group">
                          <label>Nama</label>
                          <input name="nama" type="text" class="form-control" value="{{ $pasien->nama }}">
                        </div>
                        <div class="form-group">
                            <label>Tanggal lahir</label>
                            <input name="tanggal_lahir" type="date" class="form-control" value="{{ $pasien->tanggal_lahir }}">
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <select name="jenis_kelamin" class="form-control">
                                <option value="L" @if($pasien->jenis_kelamin=='L') selected @endif>Laki-laki</option>
                                <option value="P" @if($pasien->jenis_kelamin=='P') selected @endif>Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Agama</label>
                            <select name="agama" class="form-control">
                                <option value="buddha" @if($pasien->agama=='buddha') selected @endif>Buddha</option>
                                <option value="hindu" @if($pasien->agama=='hindu') selected @endif>Hindu</option>
                                <option value="islam" @if($pasien->agama=='islam') selected @endif>Islam</option>
                                <option value="katolik" @if($pasien->agama=='katolik') selected @endif>Katolik</option>
                                <option value="konghuchu" @if($pasien->agama=='konghuchu') selected @endif>Konghu Chu</option>
                                <option value="kristen" @if($pasien->agama=='kristen') selected @endif>Kristen</option>
                            </select>
                        </div>
                        <!-- textarea -->
                        <div class="form-group">
                          <label>Alamat</label>
                          <textarea name="alamat" class="form-control" rows="3">{{ $pasien->alamat }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <select name="status" class="form-control">
                                <option value="lajang" @if($pasien->status=='lajang') selected @endif>Lajang</option>
                                <option value="menikah" @if($pasien->status=='menikah') selected @endif>Menikah</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Pekerjaan</label>
                            <input name="pekerjaan" type="text" class="form-control" value="{{ $pasien->pekerjaan }}">
                        </div>
                        <div class="form-group">
                            <label>Nomor Askes</label>
                            <input name="askes" type="text" class="form-control" value="{{ $pasien->askes }}">
                        </div>
                        <div class="form-group">
                            <label>Surat Rujuk Dokter</label>
                            <input name="rujuk_dokter" type="text" class="form-control" value="{{ $pasien->rujuk_dokter }}">
                        </div>
                        <div class="form-group">
                            <label>Surat Rujuk Rumah Sakit</label>
                            <input name="rujuk_rs" type="text" class="form-control" value="{{ $pasien->rujuk_rs }}">
                        </div>
                        <a href="/pasien/{{ $pasien->id }}/detail" class="btn btn-primary btn-sm" onclick="return confirm('Apakah anda ingin kembali ke halaman sebelumnya?')">Kembali</a>
                        <button type="submit" class="btn btn-warning pull-right btn-sm" onclick="return confirm('Apakah anda ingin memperbarui data?')">Simpan Data</button>
                    </div>
                </form>
            </div>
        </div>
      <!-- /.content -->
@endsection
