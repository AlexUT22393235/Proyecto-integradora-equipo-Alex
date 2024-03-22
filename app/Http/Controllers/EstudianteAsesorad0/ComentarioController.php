<?php

namespace App\Http\Controllers\EstudianteAsesorad0;

use App\Http\Controllers\Controller;
use App\Http\Requests\Requests\ComentarioRequest;
use App\Models\EstudianteAsesorado\Comentario;
use Illuminate\Http\Request;

class ComentarioController extends Controller
{
    // public function index(){
    //     return view("controlProyectoPresidente");
    // }
    public function store(ComentarioRequest $request)
    {
        $validated = $request->validated();

        $comentario = new Comentario;
        $comentario->usuario_id = $validated['usuario_id'];
        $comentario->comentario = $validated['comentario'];
        $comentario->proyecto_id = $validated['proyecto_id'];
        $comentario->estado_id = $validated['estado_id'];
        $comentario->save();
        return redirect()->route('controlProyectoPresidente.index')->with('success', 'Agregado exitosamente.');
    }
}
