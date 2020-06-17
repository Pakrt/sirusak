@extends('layouts.master')
@section('tittle')
Data User
@endsection
@section('content')
    <section class="content-header">
        <h1>
          Data User
          <small>Rumah Sakit XYZ</small>
        </h1>
        <ol class="breadcrumb">
        <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active"><i class="fa fa-user"></i>User</li>
        </ol>
      </section>
      <!-- Main content -->
      <section class="content">
        <div class="col-md-6">
        <!-- Default box -->
            <div class="box">
                <div class="box-body">
                    {{-- <a href="user/create"><label class="btn btn-primary">Tambah</label></a> --}}
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Created-at</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        @foreach ($users as $row)
                        <tbody>
                            <tr>
                                <td><?= $row->id; ?></td>
                                <td><?= $row->name; ?></td>
                                <td><?= $row->email; ?></td>
                                <td><?= $row->created_at; ?></td>
                                <td>
                                    <li class="badge bg-yellow">Edit</li>
                                    <li class="badge bg-red">Hapus</li>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
      </section>
      <!-- /.content -->
@endsection
