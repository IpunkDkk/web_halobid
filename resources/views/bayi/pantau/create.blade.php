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
                  <h3 class="card-title">Tambah Data Bayi</h3>
                </div>
                @php
                    // dd($data)
                @endphp
                <form method="POST" action="{{ route('pantaubayi.store') }}">
                  @csrf
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="bb_bayi">Berat Sekarang</label>
                                <input type="number" name="bb_bayi" class="form-control" id="bb_bayi" placeholder="Berat Badan" required>
                            </div>                       
                            <div class="form-group">
                                <label for="tinggi_bayi">Tinggi Sekarang</label>
                                <input type="number" name="tinggi_bayi" class="form-control" id="tinggi_bayi" placeholder="Usia Kehamilan" required>
                            </div>
                            <div class="form-group">
                                <label>Catatan Tambahan</label>
                                <textarea class="form-control" rows="3" required name="ket_tambahan" id="ket_tambahan" placeholder="Keterangan Tambahan"></textarea>
                            </div>
                            <div style="display: none" class="form-group">
                                <label for="bayi_id">ID Bayi</label>
                            <input name="bayi_id" class="form-control" id="bayi_id" placeholder="{{ $data}}" value="{{ $data}}">
                            </div>  
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="imunisasi">Imunisasi</label>
                            <input name="imunisasi" class="form-control" id="imunisasi" placeholder="Hepatitis" required>
                          </div>
                          <div class="form-group">
                            <label for="vitamin">Vitamin</label>
                            <input name="vitamin" class="form-control" id="vitamin" placeholder="B-Kompleks" required>
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