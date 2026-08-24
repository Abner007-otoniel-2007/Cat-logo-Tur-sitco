@extends('layouts.app')

@section('titulo', 'Contacto')

@section('contenido')
    <h1>Formulario de Contacto</h1>
    <p>¿Tienes dudas sobre algún destino? Escríbenos.</p>

    @if (session('exito'))
        <div class="tarjeta" style="background:#e8f5e9; color:#0b6e4f;">
            {{ session('exito') }}
        </div>
    @endif

    <div class="tarjeta">
        <form method="POST" action="{{ route('contacto.store') }}">
            @csrf

            <div style="margin-bottom:1rem;">
                <label for="nombre"><strong>Nombre</strong></label><br>
                <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}" style="width:100%; padding:0.5rem;">
                @error('nombre')
                    <small style="color:red;">{{ $message }}</small>
                @enderror
            </div>

            <div style="margin-bottom:1rem;">
                <label for="email"><strong>Correo electrónico</strong></label><br>
                <input type="email" id="email" name="email" value="{{ old('email') }}" style="width:100%; padding:0.5rem;">
                @error('email')
                    <small style="color:red;">{{ $message }}</small>
                @enderror
            </div>

            <div style="margin-bottom:1rem;">
                <label for="lugar_id"><strong>Lugar de interés</strong></label><br>
                <select id="lugar_id" name="lugar_id" style="width:100%; padding:0.5rem;">
                    <option value="">-- Selecciona un lugar --</option>
                    @foreach ($lugares as $lugar)
                        <option value="{{ $lugar['id'] }}" @selected(old('lugar_id') == $lugar['id'])>
                            {{ $lugar['titulo'] }}
                        </option>
                    @endforeach
                </select>
                @error('lugar_id')
                    <small style="color:red;">{{ $message }}</small>
                @enderror
            </div>

            <div style="margin-bottom:1rem;">
                <label for="mensaje"><strong>Mensaje</strong></label><br>
                <textarea id="mensaje" name="mensaje" rows="4" style="width:100%; padding:0.5rem;">{{ old('mensaje') }}</textarea>
                @error('mensaje')
                    <small style="color:red;">{{ $message }}</small>
                @enderror
            </div>

            <button type="submit" class="boton" style="border:none; cursor:pointer;">Enviar mensaje</button>
        </form>
    </div>
@endsection