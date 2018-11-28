@extends('templates.main2')

@section('title', 'Articulo')

@section('content')

<!-- Vista de un articulo en particulas, esat podra verse cuando se seleccione un articulo de la vista de Ver Articulos -->

<hr>
<h4><strong>Producto:</strong><h4>
<h4>{{ $articles -> title }}</h4>

@foreach($articles -> images as $image)
  <td><img class="img-responsive img-article" src="{{ asset('images/articles/' . $image -> name) }}" width="318" height="200"></td>
@endforeach

<h4><strong>Contenido:</strong><h4>
<h4>{{ $articles -> content }}</h4>

<h4><strong>Categoria:</strong><h4>
<h4>{{ $articles -> category -> name }}</h4>

<h4><strong>Usuario:</strong><h4>
<h4>{{ $articles -> user -> name}}</h4>

<h4><strong>Fecha de pulicacion:</strong><h4>
<h4>{{ $articles -> created_at}}</h4>

@endsection
