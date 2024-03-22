<?php

namespace App\Http\Controllers\ControllerKenia;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AsesoresEstudiantesControllers extends Controller
{
    public function index()
    {
        $listaEstudiantes = DB::select('CALL asignarEstudiante()');
        $listaAsesores = DB::select('CALL asignarAsesor()');

        return view('AsesoresEstudiantes', compact('listaEstudiantes','listaAsesores'));
    }


}
