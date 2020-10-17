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
        <h2>Form Upload News</h2>
        <form action="{{ route('siska.store.news') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="exampleInputEmail1">Title</label>
                <input type="text" class="form-control" name="title" id="exampleInputEmail1" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">Masukkan title untuk news yang akan anda upload.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Content</label>
                <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="3"></textarea>
                <small id="emailHelp" class="form-text text-muted">Masukkan content untuk news yang akan anda upload.</small>
            </div>
            <div class="form-group">
              <label for="foto">Foto</label>
              <input type="file" id="foto" name="photo" class="form-control">
              <small id="emailHelp" class="form-text text-muted">Silahkan pilih foto yang ingin anda upload.</small>
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div><!-- end container -->
</section>



@endsection