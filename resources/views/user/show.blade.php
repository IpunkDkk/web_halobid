@extends('layouts.index')

  @section('content')
        <section class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1>Profil User</h1>
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
                      <h3 class="card-title">Profil User</h3>
                    </div>
                      <div class="card-body">
                        <div class="form-group">
                          <label for="name">Nama</label>
                          <input type="name" name="name" value="{{ $data->name }}" class="form-control" id="name" disabled>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" value="{{ $data->email }}" class="form-control" id="email" disabled>
                        </div>
                        <div class="form-group">
                            <label for="role">Level</label>
                            <input type="role" name="role" value="{{ $data->role }}" class="form-control" id="role" disabled>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" value="{{ $data->password }}" class="form-control" id="password" disabled>
                        </div>
                      <div class="card-footer">
                        <button type="button" onclick="window.history.back()" class="btn btn-warning">Kembali</button>
                      </div>                    
                  </div>
                </div>
              </div>
            </div>
          </section>
  @endsection