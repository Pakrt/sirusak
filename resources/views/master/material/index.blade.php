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
            <li class="active"><i class="fa fa-medkit"></i>Material Kesehatan</li>
        </ol>
      </section>
      <!-- Main content -->
      <section class="content">
        <div class="col-md-8">
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
                                <th>Kode</th>
                                <th>Nama</th>
                                <th>Qty</th>
                                <th>Satuan</th>
                                <th>Harga</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($material as $material)
                            <tr>
                                <th scope="row">{{ $loop->iteration}}</th>
                                <td>{{ $material->kode_material }}</td>
                                <td>{{ $material->nama }}</td>
                                <td>{{ $material->qty }}</td>
                                <td>{{ $material->satuan }}</td>
                                <td>Rp. {{ $material->harga }}</td>
                                <td>
                                    <form action="/material/{{ $material->id }}/delete" method="POST">
                                        @method('delete')
                                        @csrf
                                        <a href="/material/{{ $material->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
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
              <h4 class="modal-title">Tambah Data Material Kesehatan</h4>
            </div>
            <form action="/material/create" role="form" method="POST">
                <div class="modal-body">
                    @csrf
                    <div class="form-group">
                      <label>Kode Material</label>
                      <input name="kode_material" type="text" class="form-control"">
                    </div>
                    <div class="form-group">
                        <label>Nama Material</label>
                        <input name="nama" type="text" class="form-control"">
                      </div>
                      <div class="form-group">
                        <label>Kuantitas Material</label>
                        <input name="qty" type="text" class="form-control">
                      </div>
                      <div class="form-group">
                        <label>Satuan Material</label>
                        <input name="satuan" type="text" class="form-control">
                      </div>
                    <div class="input-group">
                        <span class="input-group-addon">Rp.</span>
                        <input name="harga" type="text" class="form-control" placeholder="Harga material">
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
