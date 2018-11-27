@extends('templates.main2')

@section('title', 'Galeria de Imagenes')

@section('content')

<!-- Vista de todas las imagenes de los articulos almacenadas en la base de datos -->

  <div class="row">
    @foreach($images as $image)
      <div class="col-md-4">
        <div class="panel panel-default">
          <div class="panel-body">
            <img src="/images/articles/{{ $image -> name }}" class="img-responsive" width="300" height="100">
          </div>
          <div class="panel-footer">{{ $image -> article -> title }}</div>
        </div>
      </div>
    @endforeach
  </div>

@endsection
