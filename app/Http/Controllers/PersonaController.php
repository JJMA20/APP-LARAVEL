<?php

namespace App\Http\Controllers;

use App\Models\persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    public function crear(Request $request)
    {
        $per = new persona();
        $per->Nombres = $request->Nombres;
        $per->Apellidos = $request->Apellidos;
        $per->save();
        return 'Registrado';
    }

    public function mostrar()
    {
        $per = persona::get();
        return $per;
    }

    public function show(persona $persona)
    {
        //
    }

    public function editar(Request $request, persona $per)
    {
        $request->validate([
            'Nombres' =>'required',
            'Apellidos' =>'required',
        ]);

        $per->update($request->all());
        return response()->json([
           'res' => true,
           'message' => 'Persona actualizado'
        ],200);
    }

    public function eliminar(persona $per)
    {
        $per->delete();
        return response()->json([
            'res' => true,
            'message' => 'Persona eliminado'
        ],200);
    }

}
