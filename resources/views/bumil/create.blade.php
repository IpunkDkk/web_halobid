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
                <form method="POST" action="{{ route('bumil.store') }}">
                  @csrf
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Lengkap" required>
                          </div>
                          <div class="form-group">
                            <label for="tmp_lahir">Tempat Lahir</label>
                            <input type="text" name="tmp_lahir" class="form-control" id="tmp_lahir" placeholder="Tempat Lahir" required>
                          </div>
                          <div class="form-group">
                            <label for="tgl_lahir">Tanggal Lahir</label>
                            <input type="date" name="tgl_lahir" class="form-control" id="tgl_lahir" placeholder="yy/mm/dd" required>
                          </div>
                          <div class="form-group">
                            <label for="nik">NIK</label>
                            <input type="text" name="nik" class="form-control" id="nik" placeholder="NIK" required>
                          </div>
                          <div class="form-group">
                            <label for="kk">No. KK</label>
                            <input type="text" name="kk" class="form-control" id="kk" placeholder="No. KK" required>
                          </div>
                          <div class="form-group">
                            <label>Status Warga</label>
                            <select id="status" name="status" class="form-control">
                              <option>Pilih...</option>
                              <option>Domisili Tetap</option>
                              <option>Domisili Numpang</option>
                              <option>Lainnya</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat" required>
                          </div>
                          <div class="form-group">
                            <label for="pekerjaan">Pekerjaan</label>
                            <input type="text" name="pekerjaan" class="form-control" id="pekerjaan" placeholder="Pekerjaan" required>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Nomor Telepon</label>
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                              </div>
                              <input type="text" name="no_hp" id="no_hp" class="form-control" placeholder="+62" data-mask>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="suami">Nama Suami</label>
                            <input type="text" name="suami" class="form-control" id="suami" placeholder="Nama Suami" required>
                          </div>
                            <input name="posyandu_id" value="{{auth()->user()->posyandu->id}}" hidden>
                          <div class="form-group">
                            <label for="anak_ke">Mengandung Anak Ke-</label>
                            <input type="number" name="anak_ke" class="form-control" id="anak_ke" placeholder="Mengandung Anak Ke" required>
                          </div>
                          <div class="form-group">
                            <label for="bb">Berat Badan</label>
                            <input type="number" name="bb" class="form-control" id="bb" placeholder="Berat Badan" required>
                          </div>
                          <div class="form-group">
                            <label for="tensi">Tensi Darah</label>
                            <input type="number" name="tensi" class="form-control" id="tensi" placeholder="Tensi Darah" required>
                          </div>
                          <div class="form-group">
                            <label for="usia_hamil">Usia Kehamilan</label>
                            <input type="number" name="usia_hamil" class="form-control" id="usia_hamil" placeholder="Usia Kehamilan" required>
                          </div>
                          <div class="form-group">
                            <label>Catatan Pemeriksaan</label>
                            <textarea class="form-control" rows="2" required name="catatan_pemeriksaan" id="catatan_pemeriksaan" placeholder="......"></textarea>
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
