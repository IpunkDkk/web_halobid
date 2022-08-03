@extends('login.index')

@section('content')
  <div class="card">
      <div class="card-body login-card-body">
          <p class="login-box-msg">Silahkan Login </p>
        <form action="/login" method="post">
          @csrf
          <div class="input-group mb-4">
            <input type="email" name="email"  class="form-control" @error('email') is-invalid @enderror placeholder="Email" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-4">
            <input type="password" name="password" class="form-control" @error('password') is-invalid @enderror placeholder="Password" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
            <div class="input-group mb-4">
                <input type="text" name="pralogin" value="{{ app('request')->input('pralogin') }}" class="form-control" hidden>
            </div>
            <div>
              <button  type="submit" class=" w-100 btn btn-primary btn-block">Login</button>
            </div>
        </form>
          <small class="d-block text-center mt-3">Belum punya akun? <a href="{{'register/?pralogin='.app('request')->input('pralogin')}}">Daftar sekarang!</a></small>
      </div>
  </div>
@endsection
