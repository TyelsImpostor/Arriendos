@extends('templates.main2')

@section('title', 'Lista de Usuarios')

@section('content')

<!-- Vista que muestra a todos los usuarios registrados en la base de datos -->

  <table class='table tabe-striped'>
    <thead>
      <th>ID</th>
      <th>Nombre</th>
      <th>Correo</th>
      <th>Tipo</th>
      <th>Registrado</th>
    </thead>
    <body>
      @foreach($users as $user)
        <tr>
          <td>{{ $user -> id }}</td>
          <td>{{ $user -> name }}</td>
          <td>{{ $user -> email }}</td>
          <td>
            @if($user -> type == "admin")
              <span class="label label-danger">{{ $user -> type }}</span>
            @else
              <span class="label label-primary">{{ $user -> type }}</span>
            @endif
          </td>
          <td>{{ $user -> created_at}}</td>
        </tr>
      @endforeach
    </body>
  </table>
  <div class="text-center">
    {!! $users -> render() !!}
  </div>
@endsection
