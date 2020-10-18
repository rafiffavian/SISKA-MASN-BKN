@extends('layouts.master')

@section('content')
<section class="section first-section">
    <div class="container-fluid">
        <div class="masonry-blog clearfix">
          
        </div><!-- end masonry -->
    </div>
</section>
<br>
<section class="section">
    <div class="container">
        <h2>Form Upload Foto</h2>
        <form action="{{ route('siska.store.foto') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
              <label for="foto">Foto</label>
              <input required type="file" id="foto" name="name" class="form-control">
              <small id="emailHelp" class="form-text text-muted">Silahkan pilih foto yang ingin anda upload.</small>
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div><!-- end container --> <br><br>
</section>

@endsection