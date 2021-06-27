@extends('layouts.app', ['title' => 'Posts - Pesona Sumut'])

@section('content')
     <div class="container">
          <div class="d-flex justify-content-between">
               <div>
                    @isset($category)
                         <h4>Category: {{ $category->name }}</h4>
                    @endisset

                    @isset($tag)
                         <h4>Tag: {{ $tag->name }}</h4>
                    @endisset

                    @if (!isset($tag) && !isset($category))
                         <h4>All posts</h4>
                    @endif
                    <hr>
               </div>
               @if (Auth::check())
                    <div>
                         <a href="/posts/create" class="btn btn-primary">New event</a>
                    </div>
               @endif
          </div>
          <div class="row">
               @forelse ($posts as $post)
                    <div class="col-md-4">
                         <div class="card mb-4">
                              @if ($post->thumbnail)
                                   <a href="{{ route('posts.show', $post->slug) }}">
                                        <img style="height: 240px; object-fit: cover; object-position: center;"
                                             class="card-img-top" src="{{ url($post->takeImage) }}">
                                   </a>
                              @endif
                              <div class="card-body">
                                   <div>
                                        <a href="{{ route('categories.show', $post->category->slug) }}"
                                             class="text-secondary">
                                             <small>{{ $post->category->name }} - </small>
                                        </a>

                                        @foreach ($post->tags as $tag)
                                             <a href="{{ route('tags.show', $tag->slug) }}" class="text-secondary">
                                                  <small>{{ $tag->name }}</small>
                                             </a>
                                        @endforeach

                                   </div>

                                   <h5>
                                        <div>
                                             <a class="text-dark" href="{{ route('posts.show', $post->slug) }}"
                                                  class="card-title">
                                                  {{ $post->title }}
                                             </a>
                                        </div>
                                        <small class="text-secondary" style="font-size: 12px;">Location :
                                             {{ $post->location }}</small>
                                   </h5>

                                   <div class="text-secondary my-3 text-justify">
                                        {!! nl2br(Str::limit($post->body, 130, '.')) !!}
                                   </div>
                                   <div class="d-flex justify-content-between align-items-center mt-2">
                                        <div>
                                             <div class="media align-items-center">
                                                  <img width="40" class="rounded-circle mr-3"
                                                       src="{{ $post->author->gravatar() }}" alt="">
                                                  <div class="media-body">
                                                       <div>
                                                            {{ $post->author->name }}
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                        <div class="text-secondary">
                                             <small>
                                                  Published on {{ $post->created_at->diffForHumans() }}
                                             </small>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
               @empty
                    <div class="col-md-6">
                         <div class="alert alert-info">
                              There's no posts.
                         </div>
                    </div>
               @endforelse
          </div>
          <div class="d-flex justify-content-center">

               {{ $posts->links() }}
          </div>
     </div>
@endsection
