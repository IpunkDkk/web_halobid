@extends('layouts.index')

@section('content')
@php
    // dd($data)
@endphp
    <section class="content-header">
        {{-- <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Bayi</h1>
                </div>
            </div>
        </div> --}}
    </section>
    <section class="content">
        <div class="card">
                <div class="card-header">
                    <h3 class="card-title mt-2">Daftar Antrian</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <a href="{{route('antrian.create')}}">
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
                            <th>NO. ANTRIAN</th>                          
                            <th>KETERANGAN</th>                          
                            <th>STATUS</th>                          
                            <th style="width: 12%">AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->no_antrian }}</td>
                                <td>{{ $item->ket_antrian }}</td>
                                <td>{{ $item->status }}</td>

                                <td class="project-actions text-center">
                                    <div class="row justify-content-center align-item-center">
                                        <a class="btn btn-primary btn-sm m-1" href="{{ route('antrian.show', $item->id) }}">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        @if (auth()->user()->role->role != 'user')
                                        <a class="btn btn-warning btn-sm m-1" href="{{ route('antrian.edit', $item->id) }}">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <form method="post" action="{{ route('antrian.destroy', $item->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-sm m-1" href="#" >
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