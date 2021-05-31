@extends('layout')

@section('Titulo', 'Info')

@section('contenido')
<br>
<div class="centrar">
    <h1>@include('project.session-status')</h1>
</div>
<div class="row justify-content-md-center">
    <div class="col col-lg-4" id="formulario">
        <form method="POST" action="{{ route('informacion') }}">
            @csrf 
            <label for="Nombre">Nombre:</label>
            <input name="Nombre" class="form-control" placeholder="Nombre" value="{{ old('Nombre') }}">
            {!! $errors->first('Nombre', '<small>:message</small><br>') !!}
            <br>
            <label for="email">email:</label>
            <input type="email" class="form-control" name="email" placeholder="email@ejemplo.com" value="{{ old('email') }}">
            {!! $errors->first('email', '<small>:message</small><br>') !!}
            <br>
            <label for="text">Escribe algo:</label>
            <input type="text" class="form-control" placeholder="Escribe algo...">
            <br>
            <div class="d-grid gap-2 d-md-flex justify-content-md-center">
            <button class="btn btn-light">Enviar</button>
            </div>
        </form>
    </div>
</div>
@endsection