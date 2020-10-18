@extends('layouts.master')

@section('content')

<br>
<section class="section">
    <div class="container">
                   
                    <h2>Upload</h2><br>
                    <ul class="list-group">
                        <li class="list-group-item"><a href="{{ route('siska.create.foto') }}">Upload Foto</a></li>
                        <li class="list-group-item"><a href="{{ route('siska.create.video') }}">Upload Video</a></li>
                        <li class="list-group-item"><a href="{{ route('siska.create.news') }}">Upload News</a></li>
                        <li class="list-group-item"><a href="{{ route('siska.create.infografis') }}">Upload Infografik</a></li>
                        <li class="list-group-item"><a href="{{ route('siska.create.motivation') }}">Upload Motivation Quote</a></li>
                    </ul>
        
    </div><!-- end container --> <br><br>
</section>

@endsection