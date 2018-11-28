@extends('templates.main')

@section('title', 'Editar Categoria')

@section('content')

  <!-- Campos para la edicion de las tablas -->

  <h2>Editar Categoria</h2>

  {!! Form::open(['route' => ['categories.update', $category->id], 'method' => 'PUT']) !!}﻿

  <div class="form-group">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', $category -> name, ['class' => 'form-control', 'placeholder' => 'Nombre de la Categoria', 'required']) !!}
  </div>

  <div class="form-group">
    {!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
  </div>

  {!! Form::close() !!}

@endsection
