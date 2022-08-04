@extends('layouts.index')

@section('content')

        <!-- Content Header (Page header) -->
        <section class="content-header">
        {{-- <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Ibu </h1>
                </div>
            </div>
        </div> --}}
        </section>

        <!-- Main content -->
        <section class="content">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title mt-2">Daftar Ibu KB</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <a href="{{route('kb.create')}}">
                                <button type="button" class="btn btn-default" title="Add">
                                    <i class="fas fa-plus-circle"></i>
                                </button>
                            </a>
                        </div>
                    </div>
                <div class="card-body">
                    <table class="table table-bordered">
                    <thead>
                        <tr class="text-center">
                            <th style="width: 10px">#</th>
                            <th>NIK</th>
                            <th>NAMA LENGKAP</th>
                            <th>ALAMAT</th>
                            <th>SUAMI</th>
                            <th>JML ANAK</th>
                            <th style="width: 12%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nik }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->alamat }}</td>
                                <td>{{ $item->suami }}</td>
                                <td>{{ $item->jml_anak }}</td>
                                <td class="project-actions text-center">
                                    <div class="row justify-content-center align-item-center">
                                        <a class="btn btn-primary btn-sm m-1" href="{{ route('kb.show', $item->id) }}">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        @if (auth()->user()->role->role != 'User')
                                        <a class="btn btn-warning btn-sm m-1" href="{{ route('kb.edit', $item->id) }}">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <form method="post" action="{{ route('kb.destroy', $item->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-sm m-1" href="#">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                        @endif
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
    </section>
@endsection
