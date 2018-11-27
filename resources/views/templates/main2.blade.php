<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>@yield('title', 'Default') | Panel de administracion</title>
    <link rel="stylesheet" href="{{ asset('css/general.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/journal/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/chosen/chosen.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free-5.3.1-web/css/fontawesome.min.css') }}">
  </head>
  <body>

    <header>
      <!-- Panel visible en la parte superior de las vistas -->
      @include('templates.partials.nav')
    </header>

    <div class="container">
      <div class="shadow p-3 mb-5 bg-white rounded">
        <div class="panel-heading">
          <h3 class="panel-title">@yield('title')</h3>
        </div>
        <div class="panel-body">
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
