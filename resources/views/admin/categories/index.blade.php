@extends('templates.main2')

@section('title', 'Lista de Categorias')

@section('content')

<!-- Vista de todas las categorias almacenadas en la base de datos -->

  <table class='table tabe-striped'>
    <thead>
      <th>ID</th>
      <th>Nombre</th>
      <th>Accion</th>
    </thead>
    <body>
      @foreach($categories as $category)
        <tr>
          <td>{{ $category -> id }}</td>
          <td>{{ $category -> name }}</td>
          <!-- redireccion  las opciones de edicion y borrado-->
          <td><a href="{{ route('categories.edit', $category -> id) }}" class="btn btn-warning">Editar</a> <a href="{{ route('categories.destroy', $category -> id) }}" onclick="return confirm('Seguro?')" class="btn btn-danger">Borrar</a></td>
        </tr>
      @endforeach
    </body>
  </table>
  <div class="text-center">
    <!-- renderisacion para la paginacion-->
    {!! $categories -> render() !!}
  </div>
  <!-- redireccion  la opcion de creacion-->
  <a href="{{ route('categories.create')}}" class="btn btn-info">Crear nueva Categoria</a>
@endsection
