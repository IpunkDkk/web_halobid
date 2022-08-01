{{-- @extends('layouts.index')
  @section('content')
        <section class="content-header">
          </section>     
          <section class="content">
            <div class="container-fluid">
              <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                  <!-- general form elements -->
                  <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">Profil Bayi</h3>
                    </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="nama_bayi">Nama Lengkap</label>
                            <input type="text" name="nama_bayi" class="form-control" id="nama_bayi" placeholder="Nama Lengkap" value="{{ $data->nama_bayi }}" disabled>
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
                              <label>Jenis Kelamin</label>
                              <select id="jk_bayi" name="jk_bayi" class="form-control">
                                <option>Pilih...</option>
                                <option>Laki-laki</option>
                                <option>Perempuan</option>
                              </select>
                            </div>
                          <div class="form-group">
                            <label for="nama_ibu">Nam Ibu</label>
                            <input type="text" name="nama_ibu" class="form-control" id="nama_ibu" placeholder="Ibu" value="{{ $data->nama_ibu }}" disabled>
                          </div>
                          
                          <div class="form-group">
                            <label for="nama_ayah">Nama Ayah</label>
                            <input type="text" name="nama_ayah" class="form-control" id="nama_ayah" placeholder="Ayah" value="{{ $data->nama_ayah }}" disabled>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                              <label for="anak_ke">Anak Ke</label>
                              <input type="number" name="anak_ke" class="form-control" id="anak_ke" placeholder="Anak ke" value="{{ $data->anak_ke }}" disabled>
                          </div>
                          <div class="form-group">
                            <label for="brt_lahir">Berat Lahir</label>
                            <input type="text" name="brt_lahir" class="form-control" id="brt_lahir" placeholder=".. kg" value="{{ $data->brt_lahir }}" disabled>
                          </div>
                          <div class="form-group">
                            <label for="pjg_lahir">Panjang Lahir</label>
                            <input type="number" name="pjg_lahir" class="form-control" id="pjg_lahir" placeholder=".. cm" value="{{ $data->pjg_lahir }}" disabled>
                          </div>
                          <div class="form-group">
                              <label for="brt_sekarang">Berat Sekarang</label>
                              <input type="text" name="brt_sekarang" class="form-control" id="brt_sekarang" placeholder=".. kg" value="{{ $data->brt_sekarang }}" disabled>
                            </div>
                            <div class="form-group">
                              <label for="pjg_sekarang">Panjang Sekarang</label>
                              <input type="number" name="pjg_sekarang" class="form-control" id="pjg_sekarang" placeholder=".. cm" value="{{ $data->pjg_sekarang }}" disabled>
                            </div>                                   
                          <div class="form-group">
                            <label>Catatan Pemeriksaan</label>
                            <textarea class="form-control" rows="3" placeholder="" disabled>{{ $data->ket_pemeriksaan }}</textarea>
                          </div>
                        </div>
                      </div>
                  </div>
                  <div class="card-footer">
                  <button type="button" onclick="window.history.back()" class="btn btn-danger">Batal</button>
                  </div>
                  </div>
              </div>
            </div>
          </section>
  @endsection --}}

  @extends('layouts.index')
  @section('content')
        <section class="content-header">
          <div class="invoice p-4 mb-3">
              <!-- title row -->
              <div class="card-header">
                  <h2 class="card-title mt-2"><strong>Detail Bayi</strong></h2>
                    <div class="card-tools">
                        <a href="{{route('pantaubayi.show', $data->id)}}">
                            <button type="button" class="btn btn-success" title="Tambah">
                                <i class="fas solid fa-plus mr-2" ></i>Pemeriksaan
                            </button>
                        </a>
                          <button type="button" onclick="window.history.back()" class="btn btn-warning" title="Batal">
                              <i class="fas solid fa-arrow-left mr-2"></i>Batal
                          </button>
                    </div>
              </div>
              <!-- info row -->
              <div class="row ">
                <div class="col-sm-6 ">
                  <table class="table table-borderless">
                    <tr>
                      <td><strong>Nama Lengkap</strong></td>
                      <td>:</td>
                      <td><strong>{{ $data->nama_bayi }}</strong></td>
                    </tr>
                    <tr>
                      <td><strong>Tempat/Tgl.Lahir</strong></td>
                      <td>:</td>
                      <td>{{ $data->tgl_lahir }}</td>
                    </tr>
                    <tr>
                      <td><strong>Jenis Kelamin</strong></td>
                      <td>:</td>
                      <td>{{ $data->jk_bayi }}</td>
                    </tr>
                  </table>
                </div>
                <!-- /.col -->
                <div class="col-sm-6 ">
                  <table class="table table-borderless">
                    <tr>
                      <td><strong>Usia Bayi</strong></td>
                      <td>:</td>
                      <td>{{ $data->usia }}</td>
                    </tr>
                    <tr>
                      <td><strong>Nama Ibu</strong></td>
                      <td>:</td>
                      <td>{{ $data->nama_ibu }}</td>
                    </tr>
                    <tr>
                      <td><strong>Nama Ayah</strong></td>
                      <td>:</td>
                      <td>{{ $data->nama_ayah }}</td>
                    </tr>
                  </table>
                </div>
              </div>
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped border-0">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>TANGGAL PERSIKSA</th>
                        <th>BERAT</th>
                        <th>TINGGI</th>
                        <th>IMUNISASI</th>
                        <th>VITAMIN</th>
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
                          <td>{{ $item->bb_bayi }}</td>
                          <td>{{ $item->tinggi_bayi }}</td>
                          <td>{{ $item->ket_tambahan }}</td>
                          <td>{{ $item->imunisasi }}</td>
                          <td>{{ $item->vitamin }}</td>
                          <td class="project-actions text-center">
                              <div class="row justify-content-center align-item-center">
                                  <form method="post" action="{{ route('pantaubayi.destroy', $item->id) }}">
                                      @csrf
                                      @method('DELETE')
                                      <button class="btn btn-danger btn-sm m-1" href="#" title="Hapus">
                                          <i class="fas fa-trash"></i>
                                      </button>
                                  </form>
                              </div>
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