<?php

namespace App\Http\Controllers;

use App\Models\Carrera;
use Illuminate\Http\Request;

class CarreraController extends Controller
{
    public function crear(Request $request)
    {
        $carrera = new Carrera();
        $carrera->Nombre = $request->Nombre;
        $carrera->id_Estudiante = $request->id_Estudiante;
        $carrera->save();
        return 'Registrado';
    }

    public function mostrar()
    {
        $carrera = Carrera::get();
        return $carrera;
    }

    public function editar(Carrera $carrera)
    {
        
    }

    public function eliminar(Carrera $carrera)
    {
        $carrera->delete();
        return response()->json([
            'res' => true,
            'message' => 'Carrera eliminado'
        ],200);
    }
}
