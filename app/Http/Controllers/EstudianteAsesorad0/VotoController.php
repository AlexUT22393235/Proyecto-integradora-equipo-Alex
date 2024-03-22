<?php

namespace App\Http\Controllers\EstudianteAsesorad0;

use App\Http\Controllers\Controller;
use App\Http\Requests\RequestKaren\VotoRequest;
use App\Models\EstudianteAsesorado\Voto;
use Illuminate\Http\Request;

class VotoController extends Controller
{
    public function store(VotoRequest $request)
    {
        $validated = $request->validated();

        $voto = new Voto;
        $voto->usuario_id = $validated['usuario_id'];
        $voto->proyecto_id = $validated['proyecto_id'];
        $voto->motivo = $validated['motivo'];
        $voto->save();
        return redirect()->route('controlProyectoPresidente.index')->with('success', 'Agregado exitosamente.');
    }
}