@extends('layouts.index')

  @section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profil Bayi</h1>
          </div>
        </div>
      </div>
    </section>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="{{ asset('dist/img/halobid.png')}}" alt="User profile picture">
                </div>
                <h3 class="profile-username text-center">{{$data->nama_bayi}}</h3>
                <p class="text-muted text-center">{{$data->jk_bayi}}</p>
                <ul class="list-group list-group-unbordered mb-3">
                  {{-- <li class="list-group-item">
                    <b>Instagram</b><a class="float-right">Bayi</a>
                  </li> --}}
                </ul>
                <a href="#" onclick="window.history.back()" class="btn btn-warning btn-block"><b>Kembali</b></a>
              </div>
            </div>
          </div>

          <div class="col-md-9">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tentang Bayi</h3>
              </div>
              <div class="card-body">
                <strong><i class="fas fa-solid fa-mobile mr-1"></i> NIK</strong>
                <p class="text-muted">{{$data->nik_bayi }}</p>
                <hr>
                <strong><i class="fas fa-solid fa-mobile mr-1"></i> Usia</strong>
                <p class="text-muted">{{$data->usia_bayi}}</p>
                {{-- <hr>
                <strong><i class="fas fa-solid fa-mobile mr-1"></i> No. Telepon</strong>
                <p class="text-muted">{{ $data->no_hp }}</p> --}}
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  @endsection