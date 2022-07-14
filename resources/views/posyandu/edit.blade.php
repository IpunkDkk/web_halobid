@extends('layouts.index')

@section('content')

            <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Posyandu</h1>
            </div>
            </div>
        </div><!-- /.container-fluid -->
        </section>
    
        <!-- Main content -->
        <section class="content">
        <div class="container-fluid">
            <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Edit Posyandu</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="POST" action="{{ route('posyandu.update', $data->id) }}">
                    @method('PATCH')
                    @csrf
                    <div class="card-body">
                    <div class="form-group">
                        <label for="nama">Nama Posyandu</label>
                        <input type="nama" name="nama" value="{{ $data->nama }}" class="form-control" id="nama" placeholder="Masukkan nama Posyandu">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="alamat" name="alamat" value="{{ $data->alamat }}" class="form-control" id="alamat" placeholder="Alamat">
                    </div>
                    <div class="form-group">
                        <label for="no_telepon">No. Telepon</label>
                        <input type="no_telepon" name="no_telepon" value="{{ $data->no_telepon }}" class="form-control" id="no_telepon" placeholder="No. Telepon">
                    </div>
                    <div class="form-group">
                        <label for="bidan_id">Bidan</label>
                        <select name="bidan_id" class="custom-select rounded-0" id="bidan_id">
                        @foreach ($bidan as $item)
                            <option value="{{ $item->id }}">{{ $item->nama_bidan }}</option>                                
                        @endforeach
                        </select>
                      </div>
                    </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <button type="button" onclick="window.history.back()" class="btn btn-danger">Batal</button>
                    </div>
                </form>
                </div>
                <!-- /.card -->

            </div>
            <!--/.col (left) -->
            <!-- right column -->
            <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@endsection