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
                <div class="col-md-12">
                    <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Data Bayi</h3>
                    </div>
                    <form method="POST" action="{{ route('bayi.store') }}">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="nama_bayi">Nama Lengkap</label>
                                  <input type="text" name="nama_bayi" class="form-control" id="nama_bayi" placeholder="Nama Lengkap" required>
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
                                    <label>Jenis Kelamin</label>
                                    <select id="jk_bayi" name="jk_bayi" class="form-control">
                                      <option>Pilih...</option>
                                      <option>Laki-laki</option>
                                      <option>Perempuan</option>
                                    </select>
                                  </div>
                                <div class="form-group">
                                  <label for="nama_ibu">Nam Ibu</label>
                                  <input type="text" name="nama_ibu" class="form-control" id="nama_ibu" placeholder="Ibu" required>
                                </div>
                                <div class="form-group">
                                  <label for="nama_ayah">Nama Ayah</label>
                                  <input type="text" name="nama_ayah" class="form-control" id="nama_ayah" placeholder="Ayah" required>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                    <label for="anak_ke">Anak Ke</label>
                                    <input type="number" name="anak_ke" class="form-control" id="anak_ke" placeholder="Anak ke" required>
                                  </div>
                                <div class="form-group">
                                  <label for="brt_lahir">Berat Lahir</label>
                                  <input type="text" name="brt_lahir" class="form-control" id="brt_lahir" placeholder=".. kg" required>
                                </div>
                                <div class="form-group">
                                  <label for="pjg_lahir">Panjang Lahir</label>
                                  <input type="number" name="pjg_lahir" class="form-control" id="pjg_lahir" placeholder=".. cm" required>
                                </div>
                                <div class="form-group">
                                  <label for="usia">Usia</label>
                                  <input name="usia" class="form-control" id="usia" placeholder=".. cm" required>
                                </div>
                                {{-- <div class="form-group">
                                  <label for="brt_sekarang">Berat Sekarang</label>
                                  <input type="text" name="brt_sekarang" class="form-control" id="brt_sekarang" placeholder=".. kg" required>
                                </div>
                                <div class="form-group">
                                  <label for="pjg_sekarang">Panjang Sekarang</label>
                                  <input type="number" name="pjg_sekarang" class="form-control" id="pjg_sekarang" placeholder=".. cm" required>
                                </div>                                    --}}
                                <div class="form-group">
                                  <label>Catatan Pemeriksaan</label>
                                  <textarea class="form-control" id="ket_pemeriksaan" name="ket_pemeriksaan" rows="3" placeholder="......"></textarea>
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