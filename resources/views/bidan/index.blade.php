@extends('layouts.index')

@section('content')
    
        <!-- Content Header (Page header) -->
        <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Bidan</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="card">
                    <div class="card-header">
                        <h3 class="card-title mt-2">Daftar Bidan</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <a href="{{route('bidan.create')}}">
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
                                <th>Nama Bidan</th>
                                <th>Alamat</th>
                                <th>No. STR</th>
                                <th>No. HP</th>
                                <th>Pendidikan</th>
                                <th style="width: 12%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->nama_bidan }}</td>
                                    <td>{{ $item->alamat }}</td>
                                    <td>{{ $item->no_str }}</td>
                                    <td>{{ $item->no_hp }}</td>
                                    <td>{{ $item->pendidikan }}</td>
                                    <td class="project-actions text-center">
                                        <div class="row justify-content-center align-item-center">
                                            <a class="btn btn-primary btn-sm m-1" href="{{ route('bidan.show', $item->id) }}">
                                                <i class="fas fa-eye"></i>
                                              
                                            </a>
                                            <a class="btn btn-warning btn-sm m-1" href="{{ route('bidan.edit', $item->id) }}">
                                                <i class="fas fa-pencil-alt"></i>
                                                
                                            </a>
                                            <form method="post" action="{{ route('bidan.destroy', $item->id) }}">
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
        {{-- <script>
            function redirect() {
              window.location.href = '/admin/bidan';
            }
      
            $(document).ready(function() {
              $.ajaxSetup({
                headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
              });
            });
      
            function delete(url) {
              console.log("test")
              if(confirm('Are you sure?')) {
                $.ajax({
                  type: "POST",
                  url: url,
                  success: function(result) {
                    location.reload();
                  }
                });
              }
            }
          </script> --}}
      @endsection
      
      {{-- @section('script')
      @endsection --}}