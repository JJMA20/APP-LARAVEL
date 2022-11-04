<?php

namespace App\Http\Controllers;

use App\Models\Personal;
use Illuminate\Http\Request;

class PersonalController extends Controller
{
    public function crear(Request $request)
    {
        $personal = new Personal();
        $personal->Nombres = $request->Nombres;
        $personal->Apellidos = $request->Apellidos;
        $personal->save();
        return 'Registrado';
    }

    public function mostrar(Request $request)
    {
        $personal = persona::get();
        return $personal;
    }

    public function edit(Personal $personal)
    {
        //
    }

    public function eliminar(Personal $personal)
    {
        $personal->delete();
        return response()->json([
            'res' => true,
            'message' => 'Persona eliminado'
        ],200);
    }
}
