@extends('layout')

@section('Titulo', 'Contacto')

@section('contenido')
        <h1>@include('project.session-status')</h1>
    <a href="{{ route('contacto.create') }}">Crear un nuevo proyecto</a>
    <br>
    <ul>
        @isset($arreglo)    
            @foreach ($arreglo as $arregloItem)
                <li> <a href="{{ route('contacto.show', $arregloItem) }}">{{ $arregloItem->title}}</a></li>
            @endforeach
        @else
            <li>No hay nada</li>
        @endisset
        
    </ul>

@endsection 