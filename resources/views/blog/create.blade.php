@extends('layouts.index')

@section('content')

<div class="col-md-112">
    <div class="card card-primary card-outline">
      <div class="card-header">
        <h3 class="card-title">Tambah Berita</h3>
      </div>
      <div class="card-body">
        <div class="form-group">
          <input class="form-control" placeholder="Judul">
        </div>
        <div class="form-group">
            <textarea id="compose-textarea" class="form-control" rows="6" style="height: 300px" placeholder="Isi Konten">
            </textarea>
        </div>
      </div>
      <div class="card-footer">
        <div class="float-right">
          <button type="submit" class="btn btn-primary"><i class="far fa-envelope"></i> Post</button>
        </div>
      </div>
    </div>
</div>
      

@endsection

@section('js')
    <!-- Page specific script -->
<script>
    $(function () {
      //Add text editor
      $('#compose-textarea').summernote({
        height: 150,
      })
    })
</script>
@endsection