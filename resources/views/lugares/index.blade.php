@extends('layouts.app')

@section('titulo', 'Lugares Turísticos')

@section('contenido')
    <h1>Lugares Turísticos de El Salvador</h1>

    @foreach ($lugares as $lugar)
        <div class="tarjeta">
            <span class="etiqueta">{{ $lugar['departamento'] }}</span>
            <span class="etiqueta">{{ $lugar['categoria'] }}</span>
            <h2>{{ $lugar['titulo'] }}</h2>
            <p>{{ Str::limit($lugar['descripcion'], 100) }}</p>
            <a class="boton" href="{{ route('lugares.show', $lugar['id']) }}">Ver detalle</a>
        </div>
    @endforeach
@endsection