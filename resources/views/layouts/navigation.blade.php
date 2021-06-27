<nav class="navbar navbar-expand-md navbar-light bg-dark shadow-sm" id="navbar">
     <div class="container">
          @guest
               <a class="navbar-brand" style="color: #f4f4f4;" href="{{ url('/') }}">
                    Pesona Sumut
               </a>
          @else
               <a class="navbar-brand" style="color: #f4f4f4;" href="{{ url('/posts') }}">
                    Pesona Sumut
               </a>
          @endguest
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
               aria-controls="navbarSupportedContent" aria-expanded="false"
               aria-label="{{ __('Toggle navigation') }}">
               <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <!-- Left Side Of Navbar -->
               @if (\Route::current()->getName() == 'home' || \Route::current()->getName() == 'login' || \Route::current()->getName() == 'register')
               @else
                    <form action="{{ route('search.posts') }}" method="get" class="form-inline my-2 my-lg-0"
                         autocomplete="off">
                         <input name="query" class="form-control mr-sm-2" type="search" placeholder="Search"
                              aria-label="Search">
                         <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
               @endif

               <!-- Right Side Of Navbar -->
               <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                         <a href="{{ route('posts.index') }}" class="nav-link" style="color: #f4f4f4;">Posts</a>
                    </li>
                    <!-- Authentication Links -->
                    @guest
                         <li class="nav-item">
                              <a class="nav-link" style="color: #f4f4f4;"
                                   href="{{ route('login') }}">{{ __('Login') }}</a>
                         </li>
                         @if (Route::has('register'))
                              <li class="nav-item">
                                   <a class="nav-link" style="color: #f4f4f4;"
                                        href="{{ route('register') }}">{{ __('Register') }}</a>
                              </li>
                         @endif
                    @else
                         <li class="nav-item dropdown">
                              <a id="navbarDropdown" class="nav-link dropdown-toggle" style="color: #f4f4f4;" href="#"
                                   role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                   {{ Auth::user()->name }} <span class="caret"></span>
                              </a>

                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                   <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                                                                                                                                                                                                                                                    document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                   </a>

                                   <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                   </form>
                              </div>
                         </li>
                    @endguest
               </ul>
          </div>
     </div>
</nav>
