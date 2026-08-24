<?php

namespace App\Models;

use Illuminate\Support\Facades\Storage;

class Mensaje
{
    protected static string $archivo = 'data/mensajes.json';

    public static function guardar(array $datos): void
    {
        $mensajes = self::all();

        $datos['id'] = count($mensajes) + 1;
        $datos['fecha'] = now()->format('Y-m-d H:i:s');

        $mensajes[] = $datos;

        Storage::put(self::$archivo, json_encode($mensajes, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
    }

    public static function all(): array
    {
        if (!Storage::exists(self::$archivo)) {
            return [];
        }

        $contenido = Storage::get(self::$archivo);

        return json_decode($contenido, true) ?? [];
    }
}