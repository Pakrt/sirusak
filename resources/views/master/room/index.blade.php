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
            <li class="active"><i class="fa fa-bed"></i>Kamar Rawat Inap</li>
        </ol>
      </section>
      <!-- Main content -->
      <section class="content">
        <div class="col-md-6">
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
                                <th>#</th>
                                <th>Kamar</th>
                                <th>Harga</th>
                                <th>Tanggal Dibuat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kamar as $kamar)
                            <tr>
                                <th scope="row">{{ $loop->iteration}}</th>
                                <td>{{ $kamar->ruang }}</td>
                                <td>Rp. {{ $kamar->harga }}</td>
                                <td>{{ $kamar->created_at }}</td>
                                <td>
                                    <form action="/kamar/{{ $kamar->id }}/delete" method="POST">
                                        @method('delete')
                                        @csrf
                                        <a href="/kamar/{{ $kamar->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                                        <button class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus data ini??')">Hapus</button>
                                    </form>
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
              <h4 class="modal-title">Tambah Data Kamar</h4>
            </div>
            <form action="/kamar/create" role="form" method="POST">
                <div class="modal-body">
                    @csrf
                    <div class="form-group">
                      <label>Nama Kamar</label>
                      <input name="ruang" type="text" class="form-control" placeholder="Nama Kamar">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">Rp.</span>
                        <input name="harga" type="text" class="form-control" placeholder="Harga per-malam">
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
