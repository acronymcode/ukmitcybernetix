@extends('layouts.main')

@section('container')

   <!-- WHY -->
   <div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col-lg-12">
      <div class="card h-100">
        {{-- <img class="img-fluid" src="asset/img/articel/1.jpg " class="card-img-top" alt="..." /> --}}
        <div class="card-footer">
          <small class="fw-bold mb-2">{{ $post['title'] }}</small> <br>
          <small>By : {{ $post['author'] }}</small> <br>
          <small>{{ $post['body'] }}</small> <br>
          <a href="/blog">Back To Post</a>
        </div>
      </div> 
    </div>


  
@endsection