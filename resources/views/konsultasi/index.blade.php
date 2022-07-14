@extends('layouts.index')

@section('content')
    
        <!-- Content Header (Page header) -->
        <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Konsultasi</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
                <div class="card">
                <div class="card-header">
                    <h3 class="card-title mt-2">Daftar Konsultasi</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <a href="{{route('konsultasi.create')}}">
                            <button type="button" class="btn btn-default" title="Add">
                                <i class="fas fa-plus-circle"></i>
                            </button>
                        </a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                    <thead>
                        <tr class="text-center">
                            <th style="width: 1%">#</th>
                            <th>Pasien</th>
                            <th>Bidan</th>
                            <th>Layanan</th>
                            <th>Keluhan</th>
                            <th>Saran</th>
                            <th style="width: 20%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->pasien->nama_pasien }}</td>
                                <td>{{ $item->bidan->nama_bidan }}</td>
                                <td>{{ $item->layanan }}</td>
                                <td>{{ $item->keluhan }}</td>
                                <td>{{ $item->saran }}</td> 
                                <td class="project-actions text-center">
                                    <div class="row justify-content-center align-item-center">
                                        <a class="btn btn-primary btn-sm m-1" href="{{ route('konsultasi.show', $item->id) }}">
                                            <i class="fas fa-folder"></i>
                                            View
                                            </a>
                                        <a class="btn btn-warning btn-sm m-1" href="{{ route('konsultasi.edit', $item->id) }}">
                                            <i class="fas fa-pencil-alt"></i>
                                            Edit
                                        </a>
                                        <form method="post" action="{{ route('konsultasi.destroy', $item->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-sm m-1" href="#">
                                            <i class="fas fa-trash"></i>
                                            Delete
                                            </button>
                                        </form>
                                    </div>
                                </td> 
                            </tr>                            
                        @endforeach
                    </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                    <ul class="pagination pagination-sm m-0 float-right">
                    <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                    </ul>
                </div>
                </div>
                <!-- /.card -->
        </section>
  @endsection