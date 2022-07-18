@extends('layouts.index')

  @section('content')
        <section class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1>Tabel Petugas</h1>
                </div>
              </div>
            </div>
          </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                <div class="col-md-8">
                    <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Edit Data Petugas</h3>
                    </div>
                    <form method="POST" action="{{ route('petugas.update', $data->id) }}">
                        @method('PATCH')
                        @csrf
                        <div class="card-body">
                        <div class="form-group">
                            <label for="nama_petugas">Nama</label>
                            <input type="nama_petugas" name="nama_petugas" value="{{ $data->nama_petugas }}" class="form-control" id="nama_petugas">
                        </div>
                        <div class="form-group">
                            <label for="alamat_petugas">Alamat</label>
                            <input type="alamat_petugas" name="alamat_petugas" value="{{ $data->alamat_petugas }}" class="form-control" id="alamat_petugas">
                        </div>
                        <div class="form-group">
                            <label for="jk_petugas">Jenis Kelamin</label>
                            <input type="jk_petugas" name="jk_petugas" value="{{ $data->jk_petugas }}" class="form-control" id="jk_petugas">
                        </div>
                        <div class="form-group">
                            <label for="no_petugas">No. HP</label>
                            <input type="no_petugas" name="no_petugas" value="{{ $data->no_petugas }}" class="form-control" id="no_petugas">
                        </div>
                        </div>
                        </div>
                        <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <button type="button" onclick="window.history.back()" class="btn btn-danger">Batal</button>
                        </div>
                    </form>
                    </div>
                </div>
                </div>
            </div>
        </section>
  @endsection