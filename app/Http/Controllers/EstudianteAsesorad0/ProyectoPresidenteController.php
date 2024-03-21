<?php

namespace App\Http\Controllers\EstudianteAsesorad0;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ModelsAlex\proyectos;
use Illuminate\Support\Facades\DB;

class ProyectoPresidenteController extends Controller
{
    public function index()
    {
        // Obteniendo todos los proyectos con sus estudiantes y estados relacionados
    $proyectos = DB::select('CALL GetProjects_Students()');

        // Pasando los proyectos a la vista
        return view('proyectosPresidente', compact('proyectos'));
    }
}
