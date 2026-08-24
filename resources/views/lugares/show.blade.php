@extends('layouts.app')

@section('titulo', $lugar['titulo'])

@section('contenido')
    <a href="{{ route('lugares.index') }}">&larr; Volver al listado</a>

    <div class="tarjeta">
        <span class="etiqueta">{{ $lugar['departamento'] }}</span>
        <span class="etiqueta">{{ $lugar['categoria'] }}</span>
        <h1>{{ $lugar['titulo'] }}</h1>
        <p>{{ $lugar['descripcion'] }}</p>
        <p><strong>Precio de entrada:</strong> ${{ number_format($lugar['precio_entrada'], 2) }}</p>
        <p><strong>Horario:</strong> {{ $lugar['horario'] }}</p>
    </div>
@endsection