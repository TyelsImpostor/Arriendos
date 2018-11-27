@extends('templates.main')

@section('title', 'Editar Articulo')

@section('content')

  <!-- Campos para la edicion de las tablas -->

  <h2>Editar Articulo</h2>

  {!! Form::open(['route' => ['articles.update', $article], 'method' => 'PUT']) !!}

  <div class="form-group">
    {!! Form::label('title', 'Titulo') !!}
    {!! Form::text('title', $article -> title, ['class' => 'form-control', 'placeholder' => 'Titulo del Articulo', 'required']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('category_id', 'Categoria') !!}
    {!! Form::select('category_id', $categories, $article -> category -> id, ['class' => 'form-control', 'placeholder' => 'Seleccione una opcion...', 'required']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('content', 'Contenido') !!}
    {!! Form::textarea('content', $article -> content, ['class' => 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('tags', 'Tags') !!}
    {!! Form::select('tags[]', $tags, $my_tags, ['class' => 'form-control', 'multiple', 'required']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('admin', 'Si edita su post volvera a pasar por el procedimiento de aprobado, esta seguro de editar?') !!}
    {!! Form::select('admin', array('Espera' => 'SI')) !!}
  </div>

  <div class="form-group">
    {!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
  </div>

  {!! Form::close() !!}

@endsection
