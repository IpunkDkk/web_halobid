@extends('layouts.index')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Transaksi Medis</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="card">
                <div class="card-header">
                    <h3 class="card-title mt-2">Daftar Transaksi Medis</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <a href="{{route('medis.create')}}">
                            <button type="button" class="btn btn-default" title="Tambah">
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
                            <th style="width: 5%">Tanggal</th>
                            <th style="width: 10%">ID Bayi</th>
                            <th style="width: 25%">Nama Bayi</th>
                            <th style="width: 5%">Usia</th>
                            <th style="width: 20%">Petugas</th>
                            <th style="width: 15%">Tindakan Medis</th>
                            <th style="width: 12%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->created_at }}</td>
                                <td>{{ $item->nama_bayi }}</td>
                                <td>{{ $item->jk_bayi }}</td>
                                <td>{{ $item->usia_bayi }}</td>
                                <td class="project-actions text-center">
                                    <div class="row justify-content-center align-item-center">
                                        <a class="btn btn-primary btn-sm m-1" href="{{ route('medis.show', $item->id) }}}">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a class="btn btn-warning btn-sm m-1" href="{{ route('medis.edit', $item->id) }}">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <form method="post" action="{{ route('medis.destroy', $item->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-sm m-1" href="#" >
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td> 
                            </tr>                            
                        @endforeach
                    </tbody>
                    </table>
                </div>
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