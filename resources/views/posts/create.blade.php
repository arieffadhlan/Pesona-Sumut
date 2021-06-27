@extends('layouts.app', ['title' => 'New event'])

@section('content')
     <div class="container d-flex justify-content-center">
          <div class="col-md-10">
               <div class="card">
                    <div class="card-header">New event</div>
                    <div class="card-body">
                         <form action="/posts/store" method="post" enctype="multipart/form-data" autocomplete="off">
                              @csrf
                              @include('posts.partials.form-control', ['submit' => 'Create'])
                         </form>
                    </div>
               </div>
          </div>
     </div>

@endsection
