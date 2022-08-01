@extends('layouts.index')
  @section('content')
        <section class="content-header">
          <div class="invoice p-4 mb-3">
              <!-- title row -->
              <div class="card-header">
                  <h2 class="card-title mt-2"><strong>Detail Ibu KB</strong></h2>
                    <div class="card-tools">
                        <a href="{{route('pantaukb.show', $data->id)}}">
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
                      <td><strong>{{ $data->nama }}</strong></td>
                    </tr>
                    <tr>
                      <td><strong>Tempat/Tgl.Lahir</strong></td>
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
                <!-- /.col -->
                <div class="col-sm-6 ">
                  <table class="table table-borderless">
                    <tr>
                      <td><strong>Jumlah Anak</strong></td>
                      <td>:</td>
                      <td>{{ $data->jml_anak }}</td>
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
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped border-0">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>TANGGAL PERSIKSA</th>
                        <th>TENSI</th>
                        <th>BERAT</th>
                        <th>JENSI KB</th>
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
                          <td>{{ $item->tensi_kb }}</td>
                          <td>{{ $item->bb_kb }}</td>
                          <td>{{ $item->akseptor_kb }}</td>
                          <td>{{ $item->ket_tambahan }}</td>
                          <td class="project-actions text-center">
                              <div class="row justify-content-center align-item-center">
                                  {{-- <a class="btn btn-warning btn-sm m-1" href="{{ route('pantaukb.edit', $item->id) }}">
                                      <i class="fas fa-pencil-alt"></i>
                                  </a> --}}
                                  <form method="post" action="{{ route('pantaukb.destroy', $item->id) }}">
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