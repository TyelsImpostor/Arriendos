@extends('templates.main2')

@section('title', 'Reporte de Articulos')

@section('content')

<table class='table tabe-striped'>
  <thead>
    <th>Enlace</th>
    <th>Desripcion</th>
  </thead>
  <body>
    <tr>
      <td><a href="{{ route('graficos.create')}}">Grafica 1</a></td>
      <td>La grafica indica la cantidad de articulos que existen por region.</td>
    </tr>
    <tr>
      <td><a href="{{ route('graficos.index')}}">Grafica 2</a></td>
      <td>La grafica indica la cantidad de articulos vinculados a una categoria.</td>
    </tr>
    <tr>
      <td><a href="{{ route('test.create')}}">Grafica 3</a></td>
      <td>La grafica indica la cantidad de articulos por usuarios.</td>
    </tr>
  </body>
</table>

@endsection
