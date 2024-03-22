<?php

namespace App\Http\Controllers\EstudianteAsesorad0;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RutaController extends Controller
{
    public function index(){
        $votos = DB::select('call getVotos()');
    $comentarios = DB::select('call getComentarios()');
    return view('controlProyectoPresidente', compact('votos', 'comentarios'));
    }
}
