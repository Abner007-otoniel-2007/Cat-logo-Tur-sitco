<?php

namespace App\Models;

use Illuminate\Support\Facades\Storage;

class Lugar
{

    protected static string $archivo = 'data/lugares.json';


    public static function all(): array
    {
        $contenido = Storage::get(self::$archivo);

        return json_decode($contenido, true);
    }


    public static function find(int $id): ?array
    {
        $lugares = self::all();

        foreach ($lugares as $lugar) {
            if ($lugar['id'] === $id) {
                return $lugar;
            }
        }

        return null; 
    }
}