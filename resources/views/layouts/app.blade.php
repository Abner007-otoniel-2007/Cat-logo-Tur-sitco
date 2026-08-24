<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('titulo', 'Catálogo Turístico El Salvador')</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; background: #f4f4f4; }
        header { background: #0b6e4f; color: white; padding: 1rem 2rem; }
        header a { color: white; text-decoration: none; font-size: 1.2rem; }
        .contenedor { max-width: 960px; margin: 2rem auto; padding: 0 1rem; }
        .tarjeta { background: white; border-radius: 8px; padding: 1.5rem; margin-bottom: 1rem; box-shadow: 0 1px 3px rgba(0,0,0,0.1); }
        .tarjeta h2 { margin-top: 0; }
        .etiqueta { display: inline-block; background: #e8f5e9; color: #0b6e4f; padding: 0.2rem 0.6rem; border-radius: 4px; font-size: 0.85rem; margin-right: 0.5rem; }
        a.boton { display: inline-block; margin-top: 0.5rem; background: #0b6e4f; color: white; padding: 0.5rem 1rem; border-radius: 4px; text-decoration: none; }
    </style>
</head>
<body>
    <header>
        <a href="{{ route('lugares.index') }}">Regresa a nuestro catálogo turístico</a>
        <a href="{{ route('contacto.create') }}" style="float:right;">Contáctanos</a>
    </header>

    <div class="contenedor">
        @yield('contenido')
    </div>
</body>
</html>