@extends('layouts.index')

  @section('content')
        <section class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1>Tabel Bayi</h1>
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
                        <h3 class="card-title">Edit Data Bayi</h3>
                    </div>
                    <form method="POST" action="{{ route('bayi.update', $data->id) }}">
                        @method('PATCH')
                        @csrf
                        <div class="card-body">
                        <div class="form-group">
                            <label for="nama_bayi">Nama</label>
                            <input type="nama_bayi" name="nama_bayi" value="{{ $data->nama_bayi }}" class="form-control" id="nama_bayi" placeholder="Masukkan nama">
                        </div>
                        <div class="form-group">
                            <label for="nik_bayi">NIK</label>
                            <input type="nik_bayi" name="nik_bayi" value="{{ $data->nik_bayi }}" class="form-control" id="nik_bayi" placeholder="35281...">
                        </div>
                        <div class="form-group">
                            <label for="jk_bayi">Jenis Kelamin</label>
                            <input type="jk_bayi" name="jk_bayi" value="{{ $data->jk_bayi }}" class="form-control" id="jk_bayi" placeholder="L/P">
                        </div>
                        <div class="form-group">
                            <label for="usia_bayi">Usia</label>
                            <input type="usia_bayi" name="usia_bayi" value="{{ $data->usia_bayi }}" class="form-control" id="usia_bayi" placeholder="0">
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