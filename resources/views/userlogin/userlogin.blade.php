@extends('login.index')

@section('content')
  <div class="card">
      <div class="card-body login-card-body">
          <p class="login-box-msg">Silahkan Pilih Posyandu Anda!</p>
        <form action="/login" method="get">
{{--          @csrf--}}
            <div class="form-group">
              <label for="nama">Posyandu</label>
              <select name="pralogin" class="custom-select rounded-0" id="nama">
                 @foreach ($posyandu as $item)
                    <option value="{{ $item->nama }}">{{ $item->nama }}</option>
                @endforeach
              </select>
            </div>
            <div>
              <button  type="submit" class=" w-100 btn btn-primary btn-block">Next</button>
            </div>
        </form>
      </div>
  </div>
@endsection
