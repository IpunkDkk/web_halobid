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
                <div class="col-md-8">
                    <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Edit Data user</h3>
                    </div>
                    <form method="POST" action="{{ route('user.update', $data->id) }}">
                        @method('PATCH')
                        @csrf
                        <div class="card-body">
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="name" name="name" value="{{ $data->name }}" class="form-control" id="name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" value="{{ $data->email }}" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="role">Level</label>
                            <input type="role" name="role" value="{{ $data->role }}" class="form-control" id="role">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" value="{{ $data->password }}" class="form-control" id="password">
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