@extends('templates.main')

@section('title', 'Editar Tag')

@section('content')

  <!-- Campos para la edicion de las tablas -->

  <h2>Editar Tag</h2>

  {!! Form::open(['route' => ['tags.update', $tag->id], 'method' => 'PUT']) !!}﻿

    <div class="form-group">
      {!! Form::label('name', 'Nombre') !!}
      {!! Form::text('name', $tag -> name, ['class' => 'form-control', 'placeholder' => 'Nombre del tag', 'required']) !!}
    </div>

    <div class="form-group">
      {!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
    </div>

  {!! Form::close() !!}

@endsection
