@extends('templates.main2')

@section('title', 'Articulos por Aprobar')

@section('content')

<!-- Vista de todos los articulos que requieren aprobacion del adminisrador -->

  <table class='table tabe-striped'>
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
      @foreach($articles as $article)
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
            <td><a href="{{ route('accept.edit', $article -> id) }}" class="btn btn-warning">Editar</a></td>
          </tr>
        @endif
      @endforeach
    </body>
  </table>
@endsection
