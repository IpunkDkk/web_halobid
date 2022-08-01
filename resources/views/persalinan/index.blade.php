@extends('layouts.index')

@section('content')
        <section class="content-header">
        </section>

        <!-- Main content -->
        <section class="content">
                <div class="card">
                <div class="card-header">
                    <h3 class="card-title mt-2">Daftar Persalinan</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <a href="{{route('persalinan.create')}}">
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
                            <th>Nama Ibu Bersalin</th>
                            <th>Umur</th>
                            <th>Alamat</th>
                            <th>Pekerjaan Suami</th>
                            <th>Anak Ke</th>
                            <th>Usia Kehamilan</th>
                            <th>Tgl. Lahir</th>
                            <th>Lama Jam</th>
                            <th>Keselamatan ibu & Anak</th>
                            <th>Berat Badan</th>
                            <th>L/P</th>
                            <th>Keterangan</th>
                            <th style="width: 12%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nama_ibu }}</td>
                                <td>{{ $item->umur_ibu }}</td>
                                <td>{{ $item->alamat_ibu }}</td>
                                <td>{{ $item->pekerjaan_suami }}</td>
                                <td>{{ $item->anak_ke }}</td>
                                <td>{{ $item->usia_hamil }}</td>
                                <td>{{ $item->tgl_lahir_anak }}</td>
                                <td>{{ $item->lama_jam }}</td>
                                <td>{{ $item->keselamatan }}</td>
                                <td>{{ $item->bb_anak }}</td>
                                <td>{{ $item->jk_anak }}</td>
                                <td>{{ $item->ket_persalinan }}</td>
                                <td class="project-actions text-center">
                                    <div class="row justify-content-center align-item-center">
                                        <a class="btn btn-primary btn-sm m-1" href="{{ route('persalinan.show', $item->id) }}">
                                            <i class="fas fa-eye"></i>
                                            
                                            </a>
                                        <a class="btn btn-warning btn-sm m-1" href="{{ route('persalinan.edit', $item->id) }}">
                                            <i class="fas fa-pencil-alt"></i>
                                            
                                        </a>
                                        <form method="post" action="{{ route('persalinan.destroy', $item->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-sm m-1" href="#">
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