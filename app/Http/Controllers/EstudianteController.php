<?php

namespace App\Http\Controllers;

use App\Models\estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    public function crear(Request $request)
    {
        $estudiante = new estudiante();
        $estudiante->Nombres = $request->Nombres;
        $estudiante->Apellidos = $request->Apellidos;
        $estudiante->Categoria = $request->Categoria;
        $estudiante->save();
        return 'Registrado';
    }

    public function mostrar()
    {
        $estudiante = estudiante::get();
        return $estudiante;
    }

    public function editar(estudiante $estudiante)
    {
        
    }
    public function eliminar(estudiante $estudiante)
    {
        $estudiante->delete();
        return response()->json([
            'res' => true,
            'message' => 'Estudiante eliminado'
        ],200);
    }
}
