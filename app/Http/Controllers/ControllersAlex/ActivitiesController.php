<?php

namespace App\Http\Controllers\ControllersAlex;

use App\Http\Controllers\Controller;
// use App\Http\RequestsActivity\ActivityRequest;
use Illuminate\Http\Request;
use App\Models\ModelsAlex\Activity;

class ActivitiesController extends Controller
{
    public function store(Request $request)
    {
        // Crea una nueva instancia de Actividad con los datos del formulario
        $actividad = new Activity;
        
        $actividad->titulo = $request->titulo;
        $actividad->tarea = $request->tarea;
        $actividad->fecha_inicial = $request->fecha_inicial;
        $actividad->fecha_final = $request->fecha_final;

        // Guarda la nueva actividad en la base de datos
        $actividad->save();

        // Redirige a una ruta o devuelve una respuesta
        return redirect()->back()->with('success', '¡La actividad se ha creado correctamente!');
    }
}
