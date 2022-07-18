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
                <div class="col-md-12">
                    <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Data Petugas</h3>
                    </div>
                    <form method="POST" action="{{ route('petugas.store') }}">
                        @csrf
                        <div class="card-body">
                        <div class="form-group">
                            <label for="nama_petugas">Nama</label>
                            <input type="nama_petugas" name="nama_petugas" class="form-control" id="nama_petugas" placeholder="Taufiqur RM">
                        </div>
                        <div class="form-group">
                            <label for="alamat_petugas">Alamat</label>
                            <input type="alamat_petugas" name="alamat_petugas" class="form-control" id="alamat_petugas" placeholder="Pasean">
                        </div>
                        <div class="form-group">
                            <label for="jk_petugas">Jenis Kelamin</label>
                            <input type="jk_petugas" name="jk_petugas" class="form-control" id="jk_petugas" placeholder="L/P">
                        </div>
                        <div class="form-group">
                            <label for="no_petugas">No. HP</label>
                            <input type="no_petugas" name="no_petugas" class="form-control" id="no_petugas" placeholder="+628...">
                        </div>
                        </div>
                        </div>
                        <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                    </div>
                </div>
                </div>
            </div>
        </section>
  @endsection