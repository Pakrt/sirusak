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
      <section class="content">
        <div class="col-md-12">
        <!-- Default box -->
            <div class="box">
                <div class="box-body">
                    @if (session('status'))
                    <div class="alert alert-warning">
                        {{session('status')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-success">
                        Tambah Data
                    </button>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th width="50">#</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Spesialis</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($perawat as $perawat)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $perawat->nama }}</td>
                                <td>{{ $perawat->jenis_kelamin }}</td>
                                <td>{{ $perawat->spesialis }}</td>
                                <td>
                                    <a href="/perawat/{{ $perawat->id }}/detail" class="btn btn-warning btn-sm">Detail</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
      </section>
      <!-- /.content -->
      <div class="modal modal-success fade" id="modal-success">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Tambah Data Perawat</h4>
            </div>
            <form action="/perawat/create" role="form" method="POST">
                <div class="modal-body">
                    @csrf
                    <div class="form-group">
                      <label>Nama</label>
                      <input name="nama" type="text" class="form-control" required placeholder="-----">
                    </div>
                    <div class="form-group">
                        <label>Tanggal lahir</label>
                        <input name="tanggal_lahir" type="date" class="form-control" required placeholder="-----">
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-control">
                            <option value="Pria">Pria</option>
                            <option value="Wanita">Wanita</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Agama</label>
                        <select name="agama" class="form-control">
                            <option value="buddha">Buddha</option>
                            <option value="hindu">Hindu</option>
                            <option value="islam">Islam</option>
                            <option value="katolik">Katolik</option>
                            <option value="konghuchu">Konghu Chu</option>
                            <option value="kristen">Kristen</option>
                        </select>
                    </div>
                    <!-- textarea -->
                    <div class="form-group">
                      <label>Alamat</label>
                      <textarea name="alamat" class="form-control" rows="3" required placeholder="Enter ..."></textarea>
                    </div>
                    <div class="form-group">
                        <label>Nomor KTP</label>
                        <input name="nik" type="text" class="form-control" required placeholder="-----">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input name="email" type="email" class="form-control" required placeholder="@">
                    </div>
                    <div class="form-group">
                        <label>Spesialis</label>
                        <input name="spesialis" type="text" class="form-control" required placeholder="-----">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-outline" onclick="return confirm('Apakah anda ingin menyimpan data?')">Simpan Data</button>
                </div>
            </form>

          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
@endsection
