<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- CSRF Token -->
     <meta name="csrf-token" content="{{ csrf_token() }}">

     <title>{{ $title ?? 'TubesPWL' }}</title>

     <!-- Scripts -->
     <script src="{{ asset('js/app.js') }}" defer></script>

     <!-- Fonts -->
     <link rel="dns-prefetch" href="//fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

     <!-- Styles -->
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">
     <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

     <!-- Icon -->
     <link rel="icon" href="https://i.pinimg.com/originals/4a/a5/34/4aa534605d1afc465c5bdc5dd80f1ecb.png"
          type="image/x-icon">
</head>

<body>
     <div id="app">
          @include('layouts.navigation')

          <main class="py-4">
               @include('alert')
               @yield('content')
          </main>
     </div>

     <script src="https://code.jquery.com/jquery-3.5.1.min.js"
          integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js" defer></script>
     <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
     <script type="text/javascript">
          $(document).ready(function() {
               $('.ckeditor').ckeditor();
          });
     </script>
     <script>
          $(document).ready(function() {
               $('.select2').select2({
                    placeholder: "Choose some tags!"
               });
          });
     </script>
</body>

</html>
