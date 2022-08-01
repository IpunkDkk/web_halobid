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
                            <h3 class="card-title">Edit Data Ibu Hamil</h3>
                        </div>
                        <form method="POST" action="{{ route('bumil.update', $data->id) }}">
                            @method('PATCH')
                            @csrf
                            <div class="card-body">
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="nama">Nama Lengkap</label>
                                    <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Lengkap" value="{{ $data->nama }}">
                                  </div>
                                  <div class="form-group">
                                    <label for="tmp_lahir">Tempat Lahir</label>
                                    <input type="text" name="tmp_lahir" class="form-control" id="tmp_lahir" placeholder="Tempat Lahir" value="{{ $data->tmp_lahir }}">
                                  </div>
                                  <div class="form-group">
                                    <label for="tgl_lahir">Tanggal Lahir</label>
                                    <input type="date" name="tgl_lahir" class="form-control" id="tgl_lahir" placeholder="yy/mm/dd" value="{{ $data->tgl_lahir }}">
                                  </div>
                                  <div class="form-group">
                                    <label for="nik">NIK</label>
                                    <input type="text" name="nik" class="form-control" id="nik" placeholder="NIK" value="{{ $data->nik }}">
                                  </div>
                                  <div class="form-group">
                                    <label for="kk">No. KK</label>
                                    <input type="text" name="kk" class="form-control" id="kk" placeholder="No. KK" value="{{ $data->kk }}">
                                  </div>
                                  <div class="form-group">
                                    <label>Status Warga</label>
                                    <select id="status" name="status" value="satus" class="form-control">
                                      <option>Pilih...</option>
                                      <option>Domisili Tetap</option>
                                      <option>Domisili Numpang</option>
                                      <option>Lainnya</option>
                                    </select>
                                  </div>
                                  <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat" value="{{ $data->alamat }}">
                                  </div>
                                  <div class="form-group">
                                    <label for="pekerjaan">Pekerjaan</label>
                                    <input type="text" name="pekerjaan" class="form-control" id="pekerjaan" placeholder="Pekerjaan" value="{{ $data->pekerjaan }}" required>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label>Nomor Telepon</label>
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                      </div>
                                      <input type="text" name="no_hp" id="no_hp" value="{{ $data->no_hp }}" class="form-control" placeholder="+62" data-mask>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="suami">Nama Suami</label>
                                    <input type="text" name="suami" class="form-control" id="suami" placeholder="Nama Suami" value="{{ $data->suami }}">
                                  </div>
                                  <div class="form-group">
                                    <label for="anak_ke">Mengandung Anak Ke-</label>
                                    <input type="number" name="anak_ke" class="form-control" id="anak_ke" placeholder="Mengandung Anak Ke" value="{{ $data->anak_ke }}">
                                  </div>
                                  <div class="form-group">
                                    <label for="bb">Berat Badan</label>
                                    <input type="number" name="bb" class="form-control" id="bb" placeholder="Berat Badan" value="{{ $data->bb }}">
                                  </div>
                                  <div class="form-group">
                                    <label for="tensi">Tensi Darah</label>
                                    <input type="number" name="tensi" class="form-control" id="tensi" placeholder="Tensi Darah" value="{{ $data->tensi }}">
                                  </div>
                                  <div class="form-group">
                                    <label for="usia_hamil">Usia Kehamilan</label>
                                    <input type="number" name="usia_hamil" class="form-control" id="usia_hamil" placeholder="Usia Kehamilan" value="{{ $data->usia_hamil }}">
                                  </div>
                                  <div class="form-group">
                                    <label>Catatan Pemeriksaan</label>
                                    <textarea class="form-control" name="catatan_pemeriksaan" id="catatan_pemeriksaan"  rows="3">{{ $data->catatan_pemeriksaan }}</textarea>
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
        </section>
  @endsection