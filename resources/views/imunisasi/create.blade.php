@extends('layouts.index')

  @section('content')
        <section class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1>Tabel Imunisasi</h1>
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
                            <h3 class="card-title">Tambah Data Imunisasi</h3>
                        </div>
                        <form method="POST" action="{{ route('imunisasi.store') }}">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nama_imunisasi">Nama Imunisasi</label>
                                    <input type="nama_imunisasi" name="nama_imunisasi" class="form-control" id="nama_imunisasi" placeholder="Hepatitis">
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