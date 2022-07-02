@extends('layouts.index')

  @section('content')
    
                <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1>Tabel Pasien</h1>
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
                      <h3 class="card-title">Edit Data Pasien</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="POST" action="{{ route('pasien.update', $data->id) }}">
                        @method('PATCH')
                      @csrf
                      <div class="card-body">
                        <div class="form-group">
                            <label for="nama_pasien">Nama</label>
                            <input type="nama_pasien" name="nama_pasien" value="{{ $data->nama_pasien }}" class="form-control" id="nama_pasien" placeholder="Masukkan nama">
                        </div>
                        <div class="form-group">
                            <label for="alamat">NIK</label>
                            <input type="nik" name="nik" value="{{ $data->nik }}" class="form-control" id="nik" placeholder="NIK">
                          </div>
                          <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="alamat" name="alamat" value="{{ $data->alamat }}" class="form-control" id="alamat" placeholder="Alamat">
                          </div>
                          <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <input type="jenis_kelamin" name="jenis_kelamin" value="{{ $data->jenis_kelamin }}" class="form-control" id="jenis_kelamin" placeholder="L/P">
                          </div>
                          <div class="form-group">
                            <label for="usia">Usia</label>
                            <input type="usia" name="usia" value="{{ $data->usia }}" class="form-control" id="usia" placeholder="Usia">
                          </div>
                          <div class="form-group">
                              <label for="no_hp">No. HP</label>
                              <input type="no_hp" name="no_hp" value="{{ $data->no_hp }}" class="form-control" id="no_hp" placeholder="No. HP">
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
                        <button type="submit" class="btn btn-primary">Update</button>
                        <button type="button" class="btn btn-danger">Batal</button>
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