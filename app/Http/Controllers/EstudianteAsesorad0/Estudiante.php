<?php

namespace App\Http\Controllers\EstudianteAsesorad0;

use App\Http\Controllers\Controller;
use App\Models\EstudianteAsesorado\Estudiante as EstudianteAsesoradoEstudiante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Estudiante extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $estudiantes = DB::select('call getEstudiantes(?)',[$id]);
        return view('AlumnosAsesorados',compact('estudiantes'));
    }
}
