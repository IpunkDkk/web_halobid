@extends('login.index')

@section('content')
<div class="card">
    <div class="card-body login-card-body">

      @if (session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
      
        <p class="login-box-msg">Silahkan Login</p>
      <form action="#" method="post">
        @csrf
        <div class="input-group mb-4">
          <input type="email" class="form-control" placeholder="Email" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-4">
          <input type="password" class="form-control" placeholder="Password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
          <!-- /.col -->
          <div>
            <button  type="submit" class=" w-100 btn btn-primary btn-block">Sign In</button>
          </div>
      </form>
      <small class="d-block text-center mt-3">Belum punya akun? <a href="/register">Daftar sekarang!</a></small>
    </div>
    <!-- /.login-card-body -->
</div>   
@endsection