@extends('templates.main2')

@section('title', 'Mi Lista de Articulos')

@section('content')

  <!--Buscador de articulos (public function scopeSearch en app/article.php)-->
  {!! Form::open(['route' => 'myarticles.index', 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}
    <div class="form-group">
      {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Buscar Articulo...', 'aria-describedby' => 'search']) !!}
      <span class="input-group-addon" id="search"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> </span>
    </div>
  {!! Form::close() !!}
  <!--Fin buscador-->

<!-- Vista de los datos en la tabla articulos, los ordena en una tabla -->

  <table class='table tabe-striped'>
    <h4>Post's en espera</h4>
    <thead>
      <th>ID</th>
      <th>Titulo</th>
      <th>Imagen</th>
      <th>Contenido</th>
      <th>Categoria</th>
      <th>Usuario</th>
      <th>Accion</th>
    </thead>
    <body>
      <!-- Condiciones para el mostrado de los datos de la tabla articulos -->
      @foreach($articles as $article)
        @if(Auth::user() -> id === $article -> user_id)
          @if($article -> admin === 'Espera')
            <tr>
              <td>{{ $article -> id }}</td>
              <td>{{ $article -> title }}</td>
              @foreach($article -> images as $image)
                <td><img class="img-responsive img-article" src="{{ asset('images/articles/' . $image -> name) }}" width="150" height="50"></td>
              @endforeach
              <td>{{ $article -> content }}</td>
              <td>{{ $article -> category -> name }}</td>
              <td>{{ $article -> user -> name}}</td>
              <!-- redireccion  las opciones de edicion y borrado-->
              <td><a href="{{ route('articles.edit', $article -> id) }}" class="btn btn-warning">Editar</a> <a href="{{ route('articles.destroy', $article -> id) }}" onclick="return confirm('Seguro?')" class="btn btn-danger">Borrar</a></td>
            </tr>
          @endif
        @endif
      @endforeach
    </body>
  </table>

  <table class='table tabe-striped'>
    <h4>Post's aprobados</h4>
    <thead>
      <th>ID</th>
      <th>Titulo</th>
      <th>Imagen</th>
      <th>Contenido</th>
      <th>Categoria</th>
      <th>Usuario</th>
      <th>Accion</th>
    </thead>
    <body>
      <!-- Condiciones para el mostrado de los datos de la tabla articulos -->
      @foreach($articles as $article)
        @if(Auth::user() -> id === $article -> user_id)
          @if($article -> admin === 'Aceptado')
            <tr>
              <td>{{ $article -> id }}</td>
              <td>{{ $article -> title }}</td>
              @foreach($article -> images as $image)
                <td><img class="img-responsive img-article" src="{{ asset('images/articles/' . $image -> name) }}" width="150" height="50"></td>
              @endforeach
              <td>{{ $article -> content }}</td>
              <td>{{ $article -> category -> name }}</td>
              <td>{{ $article -> user -> name}}</td>
              <!-- redireccion  las opciones de edicion y borrado-->
              <td><a href="{{ route('articles.edit', $article -> id) }}" class="btn btn-warning">Editar</a> <a href="{{ route('articles.destroy', $article -> id) }}" onclick="return confirm('Seguro?')" class="btn btn-danger">Borrar</a></td>
            </tr>
          @endif
        @endif
      @endforeach
    </body>
  </table>

  <table class='table tabe-striped'>
    <h4>Post's rechazados</h4>
    <thead>
      <th>ID</th>
      <th>Titulo</th>
      <th>Imagen</th>
      <th>Contenido</th>
      <th>Categoria</th>
      <th>Usuario</th>
      <th>Accion</th>
    </thead>
    <body>
      <!-- Condiciones para el mostrado de los datos de la tabla articulos -->
      @foreach($articles as $article)
        @if(Auth::user() -> id === $article -> user_id)
          @if($article -> admin === 'Rechazado')
            <tr>
              <td>{{ $article -> id }}</td>
              <td>{{ $article -> title }}</td>
              @foreach($article -> images as $image)
                <td><img class="img-responsive img-article" src="{{ asset('images/articles/' . $image -> name) }}" width="150" height="50"></td>
              @endforeach
              <td>{{ $article -> content }}</td>
              <td>{{ $article -> category -> name }}</td>
              <td>{{ $article -> user -> name}}</td>
              <!-- redireccion  las opciones de edicion y borrado-->
              <td><a href="{{ route('articles.edit', $article -> id) }}" class="btn btn-warning">Editar</a> <a href="{{ route('articles.destroy', $article -> id) }}" onclick="return confirm('Seguro?')" class="btn btn-danger">Borrar</a></td>
            </tr>
          @endif
        @endif
      @endforeach
    </body>
  </table>
  <!-- redireccion  la opcion de creacion-->
  <a href="{{ route('articles.create')}}" class="btn btn-info">Crear nuevo Articulo</a>
@endsection
