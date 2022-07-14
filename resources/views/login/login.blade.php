@extends('login.index')

@section('content')
  <div class="card">
      <div class="card-body login-card-body">
          <p class="login-box-msg">Silahkan Login </p>
        <form action="/login" method="post">
          @csrf
          <div class="input-group mb-4">
            <input type="email" name="email" class="form-control" placeholder="Email" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-4">
            <input type="password" name="password" class="form-control" placeholder="Password" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
            <div>
              <button  type="submit" class=" w-100 btn btn-primary btn-block">Login</button>
            </div>
        </form>
          <small class="d-block text-center mt-3">Belum punya akun? <a href="/register">Daftar sekarang!</a></small>
      </div>
  </div>   
@endsection