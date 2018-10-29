@extends('templates.main2')

@section('title', 'Lista de Articulos')

@section('content')

  <!--Buscador de articulos (public function scopeSearch en app/article.php)-->
  {!! Form::open(['route' => 'articles.index', 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}
    <div class="form-group">
      {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Buscar Articulo...', 'aria-describedby' => 'search']) !!}
      <span class="input-group-addon" id="search"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> </span>
    </div>
  {!! Form::close() !!}
  <!--Fin buscador-->

  <!-- Vista de todos los articulos en la base de datos -->

  <table class='table tabe-striped'>
    <thead>
      <th>ID</th>
      <th>Titulo</th>
      <th>Imagen</th>
      <th>Contenido</th>
      <th>Categoria</th>
      <th>Usuario</th>
      <th>Estado</th>
    </thead>
    <body>
      @foreach($articles as $article)
        <tr>
          <td>{{ $article -> id }}</td>
          <td>{{ $article -> title }}</td>
          @foreach($article -> images as $image)
            <td><img class="img-responsive img-article" src="{{ asset('images/articles/' . $image -> name) }}" width="150" height="50"></td>
          @endforeach
          <td>{{ $article -> content }}</td>
          <td>{{ $article -> category -> name }}</td>
          <td>{{ $article -> user -> name}}</td>
          <td>{{ $article -> admin}}</td>
        </tr>
      @endforeach
    </body>
  </table>
  <div class="text-center">
    <!-- renderisacion para la paginacion-->
    {!! $articles -> render() !!}
  </div>
  <!-- redireccion  la opcion de creacion-->
  <a href="{{ route('articles.create')}}" class="btn btn-info">Crear nuevo Articulo</a>
@endsection
