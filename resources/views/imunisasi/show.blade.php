@extends('layouts.index')
  @section('content')
        <section class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1>Imunisasi</h1>
                </div>
              </div>
            </div>
          </section>
          <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-12">
                  <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">Tabel Imunisasi</h3>
                    </div>    
                      <div class="card-body">
                        <div class="form-group">
                          <label for="nama_imunisasi">Nama Imunisasi</label>
                          <input type="nama_imunisasi" name="nama_imunisasi" value="{{ $data->nama_imunisasi }}" class="form-control" id="nama_imunisasi" disabled>
                        </div>
                      </div>
                      <div class="card-footer">
                        <button type="button" onclick="window.history.back()" class="btn btn-warning">Kembali</button>
                      </div>                    
                  </div>
                </div>
              </div>
            </div>
          </section>
  @endsection