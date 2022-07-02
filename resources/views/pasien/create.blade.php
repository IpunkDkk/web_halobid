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
                      <h3 class="card-title">Tambah Data Pasien</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="POST" action="{{ route('pasien.store') }}">
                      @csrf
                      <div class="card-body">
                        <div class="form-group">
                          <label for="nama_pasien">Nama</label>
                          <input type="nama_pasien" name="nama_pasien" class="form-control" id="nama_pasien" placeholder="Masukkan nama">
                        </div>
                        <div class="form-group">
                          <label for="alamat">NIK</label>
                          <input type="nik" name="nik" class="form-control" id="nik" placeholder="NIK">
                        </div>
                        <div class="form-group">
                          <label for="alamat">Alamat</label>
                          <input type="alamat" name="alamat" class="form-control" id="alamat" placeholder="Alamat">
                        </div>
                        <div class="form-group">
                          <label for="jenis_kelamin">Jenis Kelamin</label>
                          <input type="jenis_kelamin" name="jenis_kelamin" class="form-control" id="jenis_kelamin" placeholder="L/P">
                        </div>
                        <div class="form-group">
                          <label for="usia">Usia</label>
                          <input type="usia" name="usia" class="form-control" id="usia" placeholder="Usia">
                        </div>
                        <div class="form-group">
                            <label for="no_hp">No. HP</label>
                            <input type="no_hp" name="no_hp" class="form-control" id="no_hp" placeholder="No. HP">
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