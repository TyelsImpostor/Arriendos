@extends('templates.main')

@section('title', 'Registrar Usuario')

@section('content')

  <!-- Campos que se veran cuando se quiera registra nuevo usuario, permiten registrar usuario -->

  <h2>Registro</h2>

  {!! Form::open(['route' => 'registers.store', 'method' => 'POST']) !!}

    <div class="form-group">
      {!! Form::label('name', 'Nombre') !!}
      {!! Form::text('name', null, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('email', 'Correo Electronico') !!}
      {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'example@gmail.com', 'required']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('password', 'Contraseña') !!}
      {!! Form::password('password', ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
      {!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
    </div>

  {!! Form::close() !!}

@endsection
