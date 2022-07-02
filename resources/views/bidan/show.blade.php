@extends('layouts.index')

  @section('content')
    
                <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1>Profil Bidan</h1>
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
                      <h3 class="card-title">Profil Bidan</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    
                      <div class="card-body">
                        <div class="form-group">
                          <label for="nama_bidan">Nama</label>
                          <input type="nama_bidan" name="nama_bidan" value="{{ $data->nama_bidan }}" class="form-control" id="nama_bidan" placeholder="Masukkan nama" disabled>
                        </div>
                        <div class="form-group">
                          <label for="alamat">Alamat</label>
                          <input type="alamat" name="alamat" value="{{ $data->alamat }}" class="form-control" id="alamat" placeholder="Alamat" disabled>
                        </div>
                        <div class="form-group">
                          <label for="no_str">No. STR</label>
                          <input type="no_str" name="no_str" value="{{ $data->no_str }}" class="form-control" id="no_str" placeholder="No. STR" disabled>
                        </div>
                        <div class="form-group">
                          <label for="no_hp">No. HP</label>
                          <input type="no_hp" name="no_hp" value="{{ $data->no_hp }}" class="form-control" id="no_hp" placeholder="No. HP" disabled>
                        </div>
                        <div class="form-group">
                          <label for="no_hp">Pendidikan</label>
                          <input type="pendidikan" name="pendidikan" value="{{ $data->pendidikan }}" class="form-control" id="pendidikan" placeholder="Pendidikan" disabled>
                        </div>
                        <div class="form-group">
                          <label for="foto">Foto</label>
                          <div class="input-group">
                            <div class="custom-file">
                              <input type="file" class="custom-file-input" id="exampleInputFile">
                            </div>
                          </div>
                        </div>
                      </div>
                      </div>
                      <!-- /.card-body -->
                      <div class="card-footer">
                        <button type="button" onclick="window.history.back()" class="btn btn-warning">Kembali</button>
                      </div>                    
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