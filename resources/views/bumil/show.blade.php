@extends('layouts.index')
  @section('content')

          {{-- <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-12">
                  <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">Tabel Ibu Hamil</h3>
                    </div>

                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="nama">Nama Lengkap</label>
                              <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Lengkap" value="{{ $data->nama }}" disabled>
                            </div>
                            <div class="form-group">
                              <label for="tmp_lahir">Tempat Lahir</label>
                              <input type="text" name="tmp_lahir" class="form-control" id="tmp_lahir" placeholder="Tempat Lahir" value="{{ $data->tmp_lahir }}" disabled>
                            </div>
                            <div class="form-group">
                              <label for="tgl_lahir">Tanggal Lahir</label>
                              <input type="date" name="tgl_lahir" class="form-control" id="tgl_lahir" placeholder="yy/mm/dd" value="{{ $data->tgl_lahir }}" disabled>
                            </div>
                            <div class="form-group">
                              <label for="nik">NIK</label>
                              <input type="text" name="nik" class="form-control" id="nik" placeholder="NIK" value="{{ $data->nik }}" disabled>
                            </div>
                            <div class="form-group">
                              <label for="kk">No. KK</label>
                              <input type="text" name="kk" class="form-control" id="kk" placeholder="No. KK" value="{{ $data->kk }}" disabled>
                            </div>
                            <div class="form-group">
                              <label>Status Warga</label>
                              <select id="status" name="status" value="{{ $data->status }}" class="form-control">
                                <option>Pilih...</option>
                                <option>Domisili Tetap</option>
                                <option>Domisili Numpang</option>
                                <option>Lainnya</option>
                              </select>
                            </div>
                            <div class="form-group">
                              <label for="alamat">Alamat</label>
                              <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat" value="{{ $data->alamat }}" disabled>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Nomor Telepon</label>
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                </div>
                                <input type="text" name="no_hp" id="no_hp" value="{{ $data->no_hp }}" class="form-control" placeholder="+62" data-mask disabled>
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="suami">Nama Suami</label>
                              <input type="text" name="suami" class="form-control" id="suami" placeholder="Nama Suami" value="{{ $data->suami }}" disabled>
                            </div>
                            <div class="form-group">
                              <label for="anak_ke">Mengandung Anak Ke-</label>
                              <input type="number" name="anak_ke" class="form-control" id="anak_ke" placeholder="Mengandung Anak Ke" value="{{ $data->anak_ke }}" disabled>
                            </div>
                            <div class="form-group">
                              <label for="bb">Berat Badan</label>
                              <input type="number" name="bb" class="form-control" id="bb" placeholder="Berat Badan" value="{{ $data->bb }}" disabled>
                            </div>
                            <div class="form-group">
                              <label for="tensi">Tensi Darah</label>
                              <input type="number" name="tensi" class="form-control" id="tensi" placeholder="Tensi Darah" value="{{ $data->tensi }}" disabled>
                            </div>
                            <div class="form-group">
                              <label for="usia_hamil">Usia Kehamilan</label>
                              <input type="number" name="usia_hamil" class="form-control" id="usia_hamil" placeholder="Usia Kehamilan" value="{{ $data->usia_hamil }}" disabled>
                            </div>
                            <div class="form-group">
                              <label>Catatan Pemeriksaan</label>
                              <textarea class="form-control" name="catatan_pemeriksaan" id="catatan_pemeriksaan"  rows="3" disabled>{{ $data->catatan_pemeriksaan }}</textarea >
                            </div>
                          </div>
                      </div>
                      </div>
                      <div class="card-footer">
                        <button type="button" onclick="window.history.back()" class="btn btn-warning">Kembali</button>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </section> --}}
        <section class="content-header">
          <div class="invoice p-4 mb-3">
              <!-- title row -->
              <div class="card-header">
                  <h2 class="card-title mt-2"><strong>Detail Ibu Hamil</strong></h2>
                    <div class="card-tools">
                        @if (auth()->user()->role->role != 'User')
                        <a href="{{route('pantaubumil.show', $data->id)}}">
                            <button type="button" class="btn btn-success" title="Tambah">
                                <i class="fas solid fa-plus mr-2" ></i>Pemeriksaan
                            </button>
                        </a>
                        @endif
                        <button type="button" onclick="window.history.back()" class="btn btn-warning" title="Batal">
                          <i class="fas solid fa-arrow-left mr-2"></i>Batal
                        </button>
                    </div>
              </div>

              <div class="row ">
                <div class="col-sm-6 ">
                  <table class="table table-borderless">
                    <tr>
                      <td><strong>Nama Lengkap</strong></td>
                      <td>:</td>
                      <td><strong>{{ $data->nama }}</strong></td>
                    </tr>
                    <tr>
                      <td><strong>Tempat, Tgl Lahir</strong></td>
                      <td>:</td>
                      <td>{{ $data->tgl_lahir }}</td>
                    </tr>
                    <tr>
                      <td><strong>NIK</strong></td>
                      <td>:</td>
                      <td>{{ $data->nik }}</td>
                    </tr>
                  </table>
                </div>
                <div class="col-sm-6 ">
                  <table class="table table-borderless">
                    <tr>
                      <td><strong>Mengandung Anak Ke</strong></td>
                      <td>:</td>
                      <td>{{ $data->anak_ke }}</td>
                    </tr>
                    <tr>
                      <td><strong>Nama Suami</strong></td>
                      <td>:</td>
                      <td>{{ $data->suami }}</td>
                    </tr>
                    <tr>
                      <td><strong>No. KK</strong></td>
                      <td>:</td>
                      <td>{{ $data->kk }}</td>
                    </tr>
                  </table>
                </div>
              </div>

              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped border-0">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>TANGGAL PERSIKSA</th>
                        <th>TENSI</th>
                        <th>BERAT</th>
                        <th>USIA</th>
                        <th>CATATAN</th>
                        <th style="widows: 5%">AKSI</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        @foreach ($pantau as $item)
                          <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ date('D, d M Y H:i:s',strtotime($item->created_at)) }}</td>
                            <td>{{ $item->tensi }}</td>
                            <td>{{ $item->bb }}</td>
                            <td>{{ $item->usia }}</td>
                            <td>{{ $item->ket_pemeriksaan }}</td>
                              <td class="project-actions text-center">
                                @if (auth()->user()->role->role != 'User')
                                <div class="row justify-content-center align-item-center">
                                  
                                    <form method="post" action="{{ route('pantaubumil.destroy', $item->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm m-1" href="#" title="Hapus">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                                @endif
                              </td>
                          </tr>
                        @endforeach
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              </div>
            </div>
          </section>
  @endsection
