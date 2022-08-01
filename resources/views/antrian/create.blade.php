@extends('layouts.index')

  @section('content')
        <section class="content-header">
            {{-- <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1>Tabel Bayi</h1>
                </div>
              </div>
            </div> --}}
          </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                <div class="col-md-6">
                    <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Data Antrian</h3>
                    </div>
                    <form method="POST" action="{{ route('antrian.store') }}">
                        @csrf
                        <div class="card-body">
                            {{-- <div class="row justify-content-center align-item-center"> --}}
                                <div class="row">
                                    <div class="col-md-12">
                                        {{-- <div class="form-group">
                                            <label for="ket_antrian">Keterangan</label>
                                            <input type="text" name="ket_antrian" class="form-control" id="ket_antrian" placeholder="Keterangan" required>
                                        </div> --}}
                                        <div class="form-group">
                                            <label>Posyandu</label>
                                                <select id="status" name="status" class="form-control">
                                                    @foreach ($posyandu as $item)
                                                        <option value="{{ $item->nama }}">{{ $item->nama}}</option>                                
                                                    @endforeach
                                                </select>
                                        </div>
                                    </div>
                                </div>
                            {{-- </div> --}}
                        </div>
                        <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Tambah</button>
                        </div>
                    </form>
                    </div>
                </div>
                </div>
            </div>
        </section>
  @endsection