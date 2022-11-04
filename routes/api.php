<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Database\Seeders\RoleSeeder;
use App\Http\Controllers\DepartamentosController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\CarreraController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('login', [AuthController::class, 'login']);
Route::post('registro', [AuthController::class, 'registro']);

//Route::get('run', [RoleSeeder::class, 'run']);
Route::middleware(['auth:sanctum'])->group(function () {
Route::get('logout', [AuthController::class, 'logout']);
Route::get('mostrar', [AuthController::class, 'mostrar']);
});

//Ruta departamento
Route::post('crearDepartamento',[DepartamentosController::class,'crear']);
Route::get('mostrarDepartamento',[DepartamentosController::class,'mostrar']);
Route::put('editarDepartamento',[DepartamentosController::class,'editar']);
Route::delete('eliminarDepartamento',[DepartamentosController::class,'eliminar']);

//Rutas de persona
Route::post('crearPersona',[PersonaController::class,'crear']);
Route::get('mostrarPersona',[PersonaController::class,'mostrar']);
Route::delete('eliminarPersona',[PersonaController::class,'eliminar']);
Route::put('editarPersona/{per}',[PersonaController::class,'editar']);

//Ruta de estudiante
Route::post('crearEstudiante',[EstudianteController::class,'crear']);
Route::get('mostrarEstudiante',[EstudianteController::class,'mostrar']);
Route::put('mostrarEstudiante',[EstudianteController::class,'editar']);
Route::delete('eliminarEstudiante',[EstudianteController::class,'eliminar']);

//Ruta de Carrera
Route::post('crearCarrera',[CarreraController::class,'crear']);
Route::get('mostrarCarrera',[CarreraController::class,'mostrar']);
Route::put('editarCarrera',[CarreraController::class,'editar']);
Route::delete('eliminarCarrera',[CarreraController::class,'eliminar']);