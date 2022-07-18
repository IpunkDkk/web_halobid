@extends('layouts.index')

  @section('content')
        <section class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1>Tabel obat</h1>
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
                        <h3 class="card-title">Tambah Data Obat</h3>
                    </div>
                    <form method="POST" action="{{ route('obat.store') }}">
                        @csrf
                        <div class="card-body">
                        <div class="form-group">
                            <label for="nama_obat">Nama Obat</label>
                            <input type="nama_obat" name="nama_obat" class="form-control" id="nama_obat" placeholder="Panadol Anak">
                        </div>
                        <div class="form-group">
                            <label for="harga_obat">Harga Obat</label>
                            <input type="harga_obat" name="harga_obat" class="form-control" id="harga_obat" placeholder="5000">
                        </div>
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
        </section>
  @endsection