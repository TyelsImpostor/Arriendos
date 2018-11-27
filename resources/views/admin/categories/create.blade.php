@extends('templates.main')

@section('title', 'Agregar Categoria')

@section('content')

  <!-- Campos para el llenado de las tablas -->

  <h2>Categoria</h2>

  {!! Form::open(['route' => 'categories.store', 'method' => 'POST']) !!}

  <div class="form-group">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre de la Categoria', 'required']) !!}
  </div>

  <div class="form-group">
    {!! Form::submit('Agregar', ['class' => 'btn btn-primary']) !!}
  </div>

  {!! Form::close() !!}

@endsection
