<?php

namespace App\Http\Controllers;

use App\Models\Lugar;
use App\Models\Mensaje;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function create()
    {
        $lugares = Lugar::all();

        return view('contacto.create', [
            'lugares' => $lugares,
        ]);
    }

    public function store(Request $request)
    {
        $datos = $request->validate([
            'nombre' => 'required|string|max:100',
            'email' => 'required|email',
            'lugar_id' => 'required|integer',
            'mensaje' => 'required|string|max:500',
        ]);

        Mensaje::guardar($datos);

        return redirect()
            ->route('contacto.create')
            ->with('exito', '¡Gracias! Tu mensaje fue enviado correctamente.');
    }
}
