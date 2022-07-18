@extends('layouts.index')
  @section('content')
        <section class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1>Daftar Petugas</h1>
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
                      <h3 class="card-title">Tabel Petugas</h3>
                    </div>    
                      <div class="card-body">
                        <div class="form-group">
                          <label for="nama_petugas">Nama Petugas</label>
                          <input type="nama_petugas" name="nama_petugas" value="{{ $data->nama_petugas }}" class="form-control" id="nama_petugas" disabled>
                        </div>
                        <div class="form-group">
                            <label for="alamat_petugas">Alamat</label>
                            <input type="alamat_petugas" name="alamat_petugas" value="{{ $data->alamat_petugas }}" class="form-control" id="alamat_petugas" disabled>
                        </div>
                        <div class="form-group">
                            <label for="jk_petugas">Jenis Kelamin</label>
                            <input type="jk_petugas" name="jk_petugas" value="{{ $data->jk_petugas }}" class="form-control" id="jk_petugas" disabled>
                        </div>
                        <div class="form-group">
                            <label for="no_petugas">No. HP</label>
                            <input type="no_petugas" name="no_petugas" value="{{ $data->no_petugas }}" class="form-control" id="no_petugas" disabled>
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