<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="{{ asset('asset/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="icon" href="asset/img/logo.svg" type="image/icon type">

    <title>{{ $title }}</title>
  </head>
  <body>

    {{-- Navbar --}}
    @include('partials.navbar')

    <div class="container">
      @yield('container')
    </div>

    @include('partials.footer')

    

    

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="asset/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
