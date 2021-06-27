@extends('layouts.app', ['title' => 'Update event'])

@section('content')
     <div class="container d-flex justify-content-center">
          <div class="col-md-10">
               <div class="card">
                    <div class="card-header">Update event : {{ $post->title }}</div>
                    <div class="card-body">
                         <form action="/posts/{{ $post->slug }}/edit" method="post" enctype="multipart/form-data"
                              autocomplete="off">
                              @method('patch')
                              @csrf
                              @include('posts.partials.form-control')
                         </form>
                    </div>
               </div>
          </div>
     </div>
@endsection
