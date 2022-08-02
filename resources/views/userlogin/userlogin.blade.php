@extends('login.index')

@section('content')
  <div class="card">
      <div class="card-body login-card-body">
          <p class="login-box-msg">Silahkan Pilih Posyandu Anda!</p>
        <form action="#" method="post">
          @csrf
            <div class="form-group">
              <label for="nama">Posyandu</label>
              <select name="nama" class="custom-select rounded-0" id="nama">
                <option value="">Tareta</option>
                <option value="">Bungguplong</option>
                <option value="">Sumber Pinang</option>
                {{-- @foreach ($posyandu as $item)
                    <option value="{{ $item->nama }}">{{ $item->nama }}</option>                                
                @endforeach --}}
              </select>
            </div>
            <div>
              <button  type="button" class=" w-100 btn btn-primary btn-block">Next</button>
            </div>
        </form>
      </div>
  </div>   
@endsection