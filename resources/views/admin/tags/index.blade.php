@extends('templates.main2')

@section('title', 'Lista de Tags')

@section('content')

  <!--Buscador de tags (public function scopeSearch en app/tag.php)-->
  {!! Form::open(['route' => 'tags.index', 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}
    <div class="form-group">
      {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Buscar tag...', 'aria-describedby' => 'search']) !!}
      <span class="input-group-addon" id="search"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> </span>
    </div>
  {!! Form::close() !!}
  <!--Fin buscador-->

  <table class='table tabe-striped'>
    <thead>
      <th>ID</th>
      <th>Nombre</th>
      <th>Accion</th>
    </thead>
    <body>
      @foreach($tags as $tag)
        <tr>
          <td>{{ $tag -> id }}</td>
          <td>{{ $tag -> name }}</td>
          <!-- redireccion  las opciones de edicion y borrado-->
          <td><a href="{{ route('tags.edit', $tag -> id) }}" class="btn btn-warning">Editar</a> <a href="{{ route('tags.destroy', $tag -> id) }}" onclick="return confirm('Seguro?')" class="btn btn-danger">Borrar</a></td>
        </tr>
      @endforeach
    </body>
  </table>
  <div class="text-center">
    <!-- renderisacion para la paginacion-->
    {!! $tags -> render() !!}
  </div>
  <!-- redireccion  la opcion de creacion-->
  <a href="{{ route('tags.create')}}" class="btn btn-info">Registrar nuevo Tag</a>
@endsection
