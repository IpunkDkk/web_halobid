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
                        <h3 class="card-title">Tambah Data Persalinan</h3>
                    </div>
                    <form method="POST" action="{{ route('persalinan.store') }}">
                        @csrf                    
            <section class="content">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nama_ibu">Nama Ibu Bersalin</label>
                                <input type="nama_ibu" name="nama_ibu" class="form-control" id="nama_ibu" placeholder="Livia">
                            </div>
                            <div class="form-group">
                                <label for="umur_ibu">Umur</label>
                                <input type="umur_ibu" name="umur_ibu" class="form-control" id="umur_ibu" placeholder="....">
                            </div>
                            <div class="form-group">
                                <label for="alamat_ibu">Alamat</label>
                                <input type="alamat_ibu" name="alamat_ibu" class="form-control" id="alamat_ibu" placeholder="Tareta">
                            </div>
                            <div class="form-group">
                                <label for="pekerjaan_suami">Pekerjaan Suami</label>
                                <input type="pekerjaan_suami" name="pekerjaan_suami" class="form-control" id="pekerjaan_suami" placeholder="Wiraswasta">
                            </div>
                            <div class="form-group">
                                <label for="anak_ke">Anak Ke</label>
                                <input type="anak_ke" name="anak_ke" class="form-control" id="anak_ke" placeholder="1">
                            </div>
                            <div class="form-group">
                                <label for="usia_hamil">Usia Kehamilan</label>
                                <input type="usia_hamil" name="usia_hamil" class="form-control" id="usia_hamil" placeholder="24-39 Mg">
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tgl_lahir_anak">Tanggal Lahir Anak</label>
                                <input type="tgl_lahir_anak" name="tgl_lahir_anak" class="form-control" id="tgl_lahir_anak" placeholder="2022-09-09">
                            </div>
                            <div class="form-group">
                                <label for="lama_jam">Lama Jam</label>
                                <input type="lama_jam" name="lama_jam" class="form-control" id="lama_jam" placeholder="1 Jam">
                            </div>
                            <div class="form-group">
                                <label for="keselamatan">Keselamat Ibu & Anak</label>
                                <input type="keselamatan" name="keselamatan" class="form-control" id="keselamatan" placeholder="Selamat">
                            </div>
                            <div class="form-group">
                                <label for="bb_anak">Berat Badan</label>
                                <input type="bb_anak" name="bb_anak" class="form-control" id="bb_anak" placeholder="300 On">
                            </div>
                            <div class="form-group">
                                <label for="jk_anak">Jenis Kelamin</label>
                                <input type="jk_anak" name="jk_anak" class="form-control" id="jk_anak" placeholder="L/P">
                            </div>
                            <div class="form-group">
                                <label for="ket_persalinan">Keterangan</label>
                                <input type="ket_persalinan" name="ket_persalinan" class="form-control" id="ket_persalinan" placeholder="Bidan">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
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