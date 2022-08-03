@extends('layouts.index')

  @section('content')
        <section class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1>Tabel User</h1>
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
                        <h3 class="card-title">Tambah Data User</h3>
                    </div>
                    <form method="POST" action="{{ route('user.store') }}">
                        @csrf
                        <div class="card-body">
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Masukkan nama">
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="username" name="username" class="form-control" id="username" placeholder="username">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="email">
                        </div>
                        <div class="form-group">
                            <label>Level</label>
                            <select id="role" name="role" class="form-control">
                              <option>Pilih...</option>
                              <option>Admin</option>
                              <option>Bidan</option>
                              <option>Kader</option>
                              <option>User</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" id="password" placeholder="***">
                        </div>
                        </div>
{{--                        </div>--}}
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
