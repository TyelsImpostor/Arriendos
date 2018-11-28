@extends('templates.main')

@section('title', 'Agregar Tag')

@section('content')

  <!-- Campos para el llenado de las tablas -->

  <h2>Agregar Tag</h2>

  {!! Form::open(['route' => 'tags.store', 'method' => 'POST']) !!}

    <div class="form-group">
      {!! Form::label('name', 'Nombre') !!}
      {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre del tag', 'required']) !!}
    </div>

    <div class="form-group">
      {!! Form::submit('Agregar', ['class' => 'btn btn-primary']) !!}
    </div>

  {!! Form::close() !!}

@endsection
