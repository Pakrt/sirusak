@extends('layouts.master')
@section('tittle')
Data Kamar Rawat Inap
@endsection
@section('content')
    <section class="content-header">
        <h1>
          Data Kamar Rawat Inap
          <small>Rumah Sakit XYZ</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i>Home</a></li>
            <li class="active"><i class="fa fa-bed"></i>Data Kamar Rawat Inap</li>
        </ol>
    </section>
      <!-- Main content -->
    <section class="content">
        <div class="col-md-6">
            <div class="box box-primary">
                <form action="/kamar/{{ $kamar->id }}/update" role="form" method="POST">
                    <div class="modal-body">
                        @csrf
                        <div class="form-group">
                            <label>Nama Kamar</label>
                            <input name="ruang" type="text" class="form-control" value="{{ $kamar->ruang }}">
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">Rp.</span>
                            <input name="harga" type="text" class="form-control" value="{{ $kamar->harga }}">
                        </div><br>
                        <a href="/kamar" class="btn btn-primary btn-sm" onclick="return confirm('Apakah anda ingin kembali ke halaman sebelumnya?')">Kembali</a>
                        <button type="submit" class="btn btn-warning pull-right btn-sm" onclick="return confirm('Apakah anda ingin memperbarui data?')">Simpan Data</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
      <!-- /.content -->
@endsection
