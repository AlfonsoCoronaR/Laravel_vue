@extends('layout')

@section('Titulo', 'Editar: '.$project->title)

@section('contenido')

<h1>Crear nuevo proyecto</h1>
<br>
<div class="row justify-content-md-center">
    <div class="col col-lg-4" id="formulario">
        <form method="POST" action="{{ route('contacto.update', $project) }}">
            @csrf @method('PATCH')
                @include('form.form',['btnText' => 'Actualizar'])
        </form>
    </div>
</div>
@endsection 