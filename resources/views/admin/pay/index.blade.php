@extends('templates.main2')

@section('title', 'Historial de Compras')

@section('content')

<!-- Vista de todas las compras realizadas por los usuarios -->

  <table class='table tabe-striped'>
    <thead>
      <th>ID del Usuaio</th>
      <th>Titular</th>
      <th>Rut</th>
      <th>Fecha de Compra</th>
    </thead>
    <body>
      @foreach($pays as $pay)
        <tr>
          <td>{{ $pay -> user_id }}</td>
          <td>{{ $pay -> title }}</td>
          <td>{{ $pay -> rut }}</td>
          <td>{{ $pay -> created_at }}</td>
        </tr>
      @endforeach
    </body>
  </table>
  <!-- renderisacion para la paginacion-->
  {!! $pays -> render() !!}

@endsection
