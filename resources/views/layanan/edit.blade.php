@extends('layouts.index')

  @section('content')
    
                <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1>Tabel Layanan</h1>
                </div>
              </div>
            </div><!-- /.container-fluid -->
          </section>
      
          <!-- Main content -->
          <section class="content">
            <div class="container-fluid">
              <div class="row">
                <!-- left column -->
                <div class="col-md-8">
                  <!-- general form elements -->
                  <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">Edit Data Layanan</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="POST" action="{{ route('layanan.update', $data->id) }}">
                        @method('PATCH')
                      @csrf
                      <div class="card-body">
                        <div class="form-group">
                            <label for="layanan">Nama</label>
                            <input type="layanan" name="layanan" value="{{ $data->layanan }}" class="form-control" id="layanan" placeholder="Masukkan nama">
                        </div>
                      </div>
                      <!-- /.card-body -->
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