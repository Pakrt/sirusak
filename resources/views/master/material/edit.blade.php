@extends('layouts.master')
@section('tittle')
Data Material Kesehatan
@endsection
@section('content')
    <section class="content-header">
        <h1>
          Data Material Kesehatan
          <small>Rumah Sakit XYZ</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i>Home</a></li>
            <li class="active"><i class="fa fa-bed"></i>Data Material Kesehatan</li>
        </ol>
    </section>
      <!-- Main content -->
    <section class="content">
        <div class="col-md-6">
            <div class="box box-primary">
                <form action="/material/{{ $material->id }}/update" role="form" method="POST">
                    <div class="modal-body">
                        @csrf
                        <div class="form-group">
                            <label>Kode Mateiral</label>
                            <input name="kode_material" type="text" class="form-control" value="{{ $material->kode_material }}">
                        </div>
                        <div class="form-group">
                            <label>Nama Mateiral</label>
                            <input name="nama" type="text" class="form-control" value="{{ $material->nama }}">
                        </div>
                        <div class="form-group">
                            <label>Kuantitas Mateiral</label>
                            <input name="qty" type="text" class="form-control" value="{{ $material->qty }}">
                        </div>
                        <div class="form-group">
                            <label>Satuan Mateiral</label>
                            <input name="satuan" type="text" class="form-control" value="{{ $material->satuan }}">
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">Rp.</span>
                            <input name="harga" type="text" class="form-control" value="{{ $material->harga }}">
                        </div><br>
                        <a href="/material" class="btn btn-primary btn-sm" onclick="return confirm('Apakah anda ingin kembali ke halaman sebelumnya?')">Kembali</a>
                        <button type="submit" class="btn btn-warning pull-right btn-sm" onclick="return confirm('Apakah anda ingin memperbarui data?')">Simpan Data</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
      <!-- /.content -->
@endsection
