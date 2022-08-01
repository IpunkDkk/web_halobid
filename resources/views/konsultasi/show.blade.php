@extends('layouts.index')

@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Tabel Konsultasi</h1>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Konsultasi</h3>
            </div>
            <form method="POST" action="{{ route('konsultasi.store') }}">
              @csrf
              <div class="card-body">
                <div class="form-group">
                    <label for="judul_konsultasi">Judul Konsultasi</label>
                    <input type="text" name="judul_konsultasi" class="form-control" id="judul_konsultasi">
                </div>
                <div class="form-group">
                    <label for="isi_pesan">Pesan</label>
                    <input type="text" name="isi_pesan"  class="form-control" id="pesan">
                </div>
              </div>
            </div>
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Kirim</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection