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
                        <h3 class="card-title">Edit Data Bayi</h3>
                    </div>
                    <form method="POST" action="{{ route('bayi.update', $data->id) }}">
                        @method('PATCH')
                        @csrf
                        <div class="card-body">
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="nama_bayi">Nama Lengkap</label>
                                  <input type="text" name="nama_bayi" class="form-control" id="nama_bayi" placeholder="Nama Lengkap" value="{{ $data->nama_bayi }}" required>
                                </div>
                                <div class="form-group">
                                  <label for="tmp_lahir">Tempat Lahir</label>
                                  <input type="text" name="tmp_lahir" class="form-control" id="tmp_lahir" placeholder="Tempat Lahir" value="{{ $data->tmp_lahir }}" required>
                                </div>
                                <div class="form-group">
                                  <label for="tgl_lahir">Tanggal Lahir</label>
                                  <input type="date" name="tgl_lahir" class="form-control" id="tgl_lahir" placeholder="yy/mm/dd" value="{{ $data->tgl_lahir }}" required>
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
                                  <input type="text" name="nama_ibu" class="form-control" id="nama_ibu" placeholder="Ibu" value="{{ $data->nama_ibu }}" required>
                                </div>
                                <div class="form-group">
                                  <label for="nama_ayah">Nama Ayah</label>
                                  <input type="text" name="nama_ayah" class="form-control" id="nama_ayah" placeholder="Ayah" value="{{ $data->nama_ayah }}" required>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                    <label for="anak_ke">Anak Ke</label>
                                    <input type="number" name="anak_ke" class="form-control" id="anak_ke" placeholder="Anak ke" value="{{ $data->anak_ke }}" required>
                                </div>
                                <div class="form-group">
                                  <label for="brt_lahir">Berat Lahir</label>
                                  <input type="text" name="brt_lahir" class="form-control" id="brt_lahir" placeholder=".. kg" value="{{ $data->brt_lahir }}" required>
                                </div>
                                <div class="form-group">
                                  <label for="pjg_lahir">Panjang Lahir</label>
                                  <input type="number" name="pjg_lahir" class="form-control" id="pjg_lahir" placeholder=".. cm" value="{{ $data->pjg_lahir }}" required>
                                </div>
                                <div class="form-group">
                                  <label for="usia">Usia</label>
                                  <input name="usia" class="form-control" id="usia" placeholder=".. cm" value="{{ $data->pjg_lahir }}" required>
                                </div>
                                {{-- <div class="form-group">
                                  <label for="brt_sekarang">Berat Sekarang</label>
                                  <input type="text" name="brt_sekarang" class="form-control" id="brt_sekarang" placeholder=".. kg" value="{{ $data->brt_sekarang }}" required>
                                </div>
                                <div class="form-group">
                                  <label for="pjg_sekarang">Panjang Sekarang</label>
                                  <input type="number" name="pjg_sekarang" class="form-control" id="pjg_sekarang" placeholder=".. cm" value="{{ $data->pjg_sekarang }}" required>
                                </div>                                    --}}
                                <div class="form-group">
                                  <label>Catatan Pemeriksaan</label>
                                  <textarea class="form-control" rows="2" placeholder="......">{{ $data->ket_pemeriksaan }}</textarea>
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
            </div>
        </section>
  @endsection