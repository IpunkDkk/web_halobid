@extends('layouts.index')

  @section('content')
    
                <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1>Tabel Mitra</h1>
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
                      <h3 class="card-title">Edit Data Mitra</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="POST" action="{{ route('mitra.update', $data->id) }}">
                        @method('PATCH')
                      @csrf
                      <div class="card-body">
                        <div class="form-group">
                            <label for="nama_mitra">Nama</label>
                            <input type="nama_mitra" name="nama_mitra" value="{{ $data->nama_mitra }}" class="form-control" id="nama_mitra" placeholder="Masukkan nama">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="alamat" name="alamat" value="{{ $data->alamat }}" class="form-control" id="alamat" placeholder="Alamat">
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