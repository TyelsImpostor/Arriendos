<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>@yield('title', 'Home') | Bienvenido a Yapue</title>
    <link rel="stylesheet" href="{{ asset('css/general.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/journal/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/chosen/chosen.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free-5.3.1-web/css/fontawesome.min.css') }}">
  </head>
  <body>

    <header>
      <!-- Panel visible en la parte superior de las vistas y la opcion para ver Ver Articulos-->
      @include('templates.partials.nav')
      @include('templates.partials.header')
    </header>

    <div class="container">
      <div class="card border-dark mb-3">
        <div class="card-header">Ultimos articulos</div>
          <div class="card-body">
            @include('flash::message')
            @include('templates.partials.errors')
            @yield('content')
        </div>
      </div>
    </div>

    <script src="{{ asset('plugins/jquery/js/jquery-3.3.1.slim.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ asset('plugins/chosen/chosen.jquery.js') }}"></script>
  </body>
</html>
