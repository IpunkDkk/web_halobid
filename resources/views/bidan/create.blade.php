@extends('layouts.index')

  @section('content')
    
                <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1>Tabel Bidan</h1>
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
                      <h3 class="card-title">Tambah Data Bidan</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="POST" action="{{ route('bidan.store') }}">
                      @csrf
                      <div class="card-body">
                        <div class="form-group">
                          <label for="nama_bidan">Nama</label>
                          <input type="nama_bidan" name="nama_bidan" class="form-control" id="nama_bidan" placeholder="Masukkan nama">
                        </div>
                        <div class="form-group">
                          <label for="alamat">Alamat</label>
                          <input type="alamat" name="alamat" class="form-control" id="alamat" placeholder="Alamat">
                        </div>
                        <div class="form-group">
                          <label for="no_str">No. STR</label>
                          <input type="no_str" name="no_str" class="form-control" id="no_str" placeholder="No. STR">
                        </div>
                        <div class="form-group">
                          <label for="no_hp">No. HP</label>
                          <input type="no_hp" name="no_hp" class="form-control" id="no_hp" placeholder="No. HP">
                        </div>
                        <div class="form-group">
                          <label for="no_hp">Pendidikan</label>
                          <input type="pendidikan" name="pendidikan" class="form-control" id="pendidikan" placeholder="Pendidikan">
                        </div>
                        <div class="form-group">
                          <label for="foto">Foto</label>
                          <div class="input-group">
                            <div class="custom-file">
                              <input type="file" class="custom-file-input" id="exampleInputFile">
                              <label class="custom-file-label" for="exampleInputFile">Pilih file</label>
                            </div>
                            <div class="input-group-append">
                              <span class="input-group-text">Upload</span>
                            </div>
                          </div>
                        </div>
                      </div>
                      </div>
                      <!-- /.card-body -->
      
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
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