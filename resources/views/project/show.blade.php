@extends('layout')

@section('Titulo', $project->title)

@section('contenido')

    <h1>{{ $project->title }}</h1>
    <a href="{{ route('contacto.edit', $project) }}">Editar</a>
    <p>{{ $project->description }}</p>
    <p>{{ $project->created_at->diffForHumans() }}</p>
    <form method="POST" action="{{ route('contacto.destroy', $project) }}">
        @csrf @method('DELETE')
        <button class="btn btn-light">Eliminar</button>
    </form>
@endsection 