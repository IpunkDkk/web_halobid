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
                  <h3 class="card-title">Tambah Data KB</h3>
                </div>
                @php
                    // dd($data)
                @endphp
                <form method="POST" action="{{ route('pantaukb.store') }}">
                  @csrf
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-6">
                            
                            <div class="form-group">
                                <label for="tensi_kb">Tensi Darah Sekarang</label>
                                <input name="tensi_kb" class="form-control" id="tensi_kb" placeholder="110 mmHG" required>
                            </div>                       
                            <div class="form-group">
                                <label for="bb_kb">Berat Sekarang</label>
                                <input name="bb_kb" class="form-control" id="bb_kb" placeholder="40 Kg" required>
                            </div>
                            <div class="form-group">
                                <label>Jenis Akseptor KB</label>
                                <select id="akseptor_kb" name="akseptor_kb" class="form-control" required>
                                  <option>Pilih...</option>
                                  <option>KB Pil</option>
                                  <option>KB Suntik</option>
                                  <option>KB Implan</option>
                                  <option>KB Spiral</option>
                                  <option>KB Vasektomi</option>
                                  <option>KB Tubektomi</option>
                                  <option>KB Lainnya</option>
                                </select>
                              </div>                      
                            <div class="form-group">
                                <label>Catatan Tambahan</label>
                                <textarea class="form-control" rows="2" required name="ket_tambahan" id="ket_tambahan" placeholder="Keterangan Tambahan" required></textarea>
                            </div>
                            <div style="display: none" class="form-group">
                                <label for="kb_id">ID KB</label>
                            <input name="kb_id" class="form-control" id="kb_id" placeholder="{{ $data}}" value="{{ $data}}">
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