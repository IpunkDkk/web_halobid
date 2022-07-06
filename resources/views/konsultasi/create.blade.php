@extends('layouts.index')

  @section('content')
    
                <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1>Tabel Konsultasi</h1>
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
                      <h3 class="card-title">Tambah Data Konsultasi</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="POST" action="{{ route('konsultasi.store') }}">
                      @csrf
                      <div class="card-body">
                        <div class="form-group">
                          <label for="pasien_id">Pasien</label>
                            <select name="pasien_id" class="custom-select rounded-0" id="pasien_id">
                                @foreach ($pasien as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama_pasien }}</option>                                
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="bidan_id">Bidan</label>
                            <select name="bidan_id" class="custom-select rounded-0" id="bidan_id">
                                @foreach ($bidan as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama_bidan }}</option>                                
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="layanan_id">Layanan</label>
                            <select name="layanan_id" class="custom-select rounded-0" id="layanan_id">
                                @foreach ($layanan as $item)
                                    <option value="{{ $item->id }}">{{ $item->layanan }}</option>                                
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="keluhan">Keluhan</label>
                            <input type="text" name="keluhan" class="form-control" id="keluhan" placeholder="Keluhan">
                        </div>
                        <div class="form-group">
                            <label for="saran">Saran</label>
                            <input type="text" name="saran" class="form-control" id="saran" placeholder="Saran">
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