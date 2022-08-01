@extends('layouts.index')

  @section('content')

                <!-- Content Header (Page header) -->
        <section class="content-header">
            {{-- <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1>Profil Mitra</h1>
                </div>
              </div>
            </div> --}}
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
                      <h3 class="card-title">Antrian</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <div class="card-body">
                        <div class="form-group">
                            <label for="ket_antrian">Keterangan</label>
                            <input type="text" name="ket_antrian" class="form-control" id="ket_antrian"  value="{{ $data->ket_antrian }}" required>
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                                <select id="status" name="status" class="form-control" >
                                    <option value="belum">Belum</option>
                                    <option value="sudah">Sudah</option>
                                </select>
                        </div>
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