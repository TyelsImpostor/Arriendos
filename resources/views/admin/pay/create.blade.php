@extends('templates.main')

@section('title', 'Compra Premium')

@section('content')

  <!-- Campos para el llenado de las tablas -->

  <h2>Transaccion</h2>

  {!! Form::open(['route' => 'pays.store', 'method' => 'POST', 'files' => true]) !!}

  <div class="form-group">
    {!! Form::label('title', 'Titular') !!}
    {!! Form::text('title', null, ['class' => 'form-control', 'required']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('rut', 'Rut') !!}
    {!! Form::text('rut', null, ['class' => 'form-control', 'required']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('pay', 'Pago') !!}
    {!! Form::text('pay', null, ['class' => 'form-control', 'required']) !!}
  </div>

  <div class="form-group">
    {!! Form::submit('Pagar', ['class' => 'btn btn-primary']) !!}
  </div>

  {!! Form::close() !!}

@endsection
