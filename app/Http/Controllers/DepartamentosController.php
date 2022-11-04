<?php

namespace App\Http\Controllers;

use App\Models\departamentos;
use Illuminate\Http\Request;

class DepartamentosController extends Controller
{
    public function crear(Request $request)
    {
        $dep = new departamentos();
        $dep->NomDep = $request->NomDep;
        $dep->save();
        return "Registrado";
    }

    public function mostrar()
    {
        $dep = departamentos::get();
        return $dep;
    }

    public function editar(Request $request, departamentos $dep)
    {
        $dep->update($request->all());
        return response()->json([
           'res' => true,
           'message' => 'Departamento actualizado'
        ],200);
    }

    public function eliminar(departamentos $dep)
    {
        $dep->delete();
        return response()->json([
            'res' => true,
            'message' => 'Departamento eliminado'
        ],200);
    }
}
