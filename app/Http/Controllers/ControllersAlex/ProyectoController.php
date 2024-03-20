<?php

namespace App\Http\Controllers\ControllersAlex;

use Illuminate\Http\Request;
use App\Models\ModelsAlex\proyectos;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ProyectoController extends Controller
{
    public function index()
    {
        // Obteniendo todos los proyectos con sus estudiantes y estados relacionados
    $proyectos = DB::select('CALL GetProjects_Students()');

        // Pasando los proyectos a la vista
        return view('proyectosAsesor', compact('proyectos'));
    }
}
