@extends('layout')

@section('Titulo', 'Crear Proyecto')

@section('contenido')

<h1>Crear nuevo proyecto</h1>
<br>
<div class="row justify-content-md-center">
    <div class="col col-lg-4" id="formulario">
        <form method="POST" action="{{ route('contacto.store') }}">
            @csrf 
               @include('form.form',['btnText' => 'Guardar'])
        </form>
    </div>
</div>
@endsection 