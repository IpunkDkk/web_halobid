@extends('layouts.index')
  @section('content')
    <section class="content-header">
    </section>
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Tambah Data Ibu Hamil</h3>
                </div>
                @php
                    // dd($data)
                @endphp
                <form method="POST" action="{{ route('pantaubumil.store') }}">
                  @csrf
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tensi">Tensi Darah Sekarang</label>
                                <input type="number" name="tensi" class="form-control" id="tensi" placeholder="Tensi Darah" required>
                            </div>
                            <div class="form-group">
                                <label for="bb">Berat Badan Sekarang</label>
                                <input type="number" name="bb" class="form-control" id="bb" placeholder="Berat Badan" required>
                            </div>                       
                            <div class="form-group">
                                <label for="usia">Usia Kehamilan</label>
                                <input type="number" name="usia" class="form-control" id="usia" placeholder="Usia Kehamilan" required>
                            </div>
                            <div class="form-group">
                                <label>Catatan Tambahan</label>
                                <textarea class="form-control" rows="3" required name="ket_pemeriksaan" id="ket_pemeriksaan" placeholder="......"></textarea>
                            </div>
                            <div style="display: none" class="form-group">
                                <label for="bumil_id">ID Bumil</label>
                            <input name="bumil_id" class="form-control" id="bumil_id" placeholder="{{ $data}}" value="{{ $data}}">
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
        </div>
      </section>
  @endsection