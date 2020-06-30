@extends('layouts.master')
@section('tittle')
Data Tindakan Medis
@endsection
@section('content')
    <section class="content-header">
        <h1>
          Data Tindakan Medis
          <small>Rumah Sakit XYZ</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i>Home</a></li>
            <li class="active"><i class="fa fa-bed"></i>Data Tindakan Medis</li>
        </ol>
    </section>
      <!-- Main content -->
    <section class="content">
        <div class="col-md-6">
            <div class="box box-primary">
                <form action="/tindakan/{{ $tindakan->id }}/update" role="form" method="POST">
                    <div class="modal-body">
                        @csrf
                        <div class="form-group">
                            <label>Kode Tindakan</label>
                            <input name="kode_tindakan" type="text" class="form-control" value="{{ $tindakan->kode_tindakan }}" required>
                        </div>
                        <div class="form-group">
                            <label>Nama Tindakan</label>
                            <input name="nama" type="text" class="form-control" value="{{ $tindakan->nama }}" required>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">Rp.</span>
                            <input name="harga" type="text" class="form-control" value="{{ $tindakan->harga }}" required>
                        </div><br>
                        <a href="/tindakan" class="btn btn-primary btn-sm" onclick="return confirm('Apakah anda ingin kembali ke halaman sebelumnya?')">Kembali</a>
                        <button type="submit" class="btn btn-warning pull-right btn-sm" onclick="return confirm('Apakah anda ingin memperbarui data?')">Simpan Data</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
      <!-- /.content -->
@endsection
