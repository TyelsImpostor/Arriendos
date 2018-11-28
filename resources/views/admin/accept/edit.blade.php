@extends('templates.main')

@section('title', 'Aprobacion de posts')

@section('content')

  <!-- Campos para la edicion de las tablas -->

  <h2>Aprobacion de post's</h2>

  {!! Form::open(['route' => ['articles.update', $article], 'method' => 'PUT']) !!}

  <div class="form-group">
    {!! Form::label('admin', 'Elegir') !!}
    {!! Form::select('admin', array('Aceptado' => 'Aceptar', 'Rechazado' => 'Rechazar')) !!}
  </div>

  <div class="form-group">
    {!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
  </div>

  {!! Form::close() !!}

@endsection
