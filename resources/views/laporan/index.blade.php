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
                        <h3 class="card-title mt-2">Laporan Bayi</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <a href="{{route('bumil.create')}}">
                                <button type="button" class="btn btn-default" title="Add">
                                    <i class="fas fa-plus-circle"></i>
                                </button>
                            </a>
                        </div>
                    </div>
                <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered" id="myTable">
                        <thead>
                            <tr class="text-center">
                                <th style="width: 10px">#</th>
                                <th>NIK</th>
                                <th>NAMA LENGKAP</th>
                                <th>ALAMAT</th>
                                <th>USIA KEHAMILAN</th>
                                <th>PEKERJAAN</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td>$loop->iteration</td>
                                    <td></td>
                                    <td></td>
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
                <script>
                    $(document).ready( function () {
                            $('#myTable').DataTable();
                        } );
                </script>
        </section>
            

  @endsection