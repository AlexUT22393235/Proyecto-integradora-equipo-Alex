<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use Illuminate\Http\Request;


class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $proyectos = Proyecto::all();
        // $divisiones = DB::select('select * from divisiones');
        // $role = DB::select('select * from tipo_usuarios');
        // $status = DB::select('select * from estados');
        return view('mapeoProvicionalProyectos', compact('proyectos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('proyectos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar solo los datos especificados del formulario
        $request->validate([
            'titulo' => 'required|string',
            'objetivo' => 'required|string',
            'justificacion' => 'required|string',
            'planteamiento' => 'required|string',
            'actividades' => 'required|string',
            'fecha_inicial' => 'required|date',
            'fecha_final' => 'required|date',
        ]);
    
        // Crear un nuevo proyecto en la base de datos
        $proyecto = Proyecto::create([
            'titulo' => $request->titulo,
            'objetivo' => $request->objetivo,
            'justificacion' => $request->justificacion,
            'planteamiento' => $request->planteamiento,
            'actividades' => $request->actividades,
            // Eliminar la restricción 'required' no significa que no puedas incluir estos campos;
            // simplemente, no serán obligatorios. Puedes incluirlos de forma condicional:
            'empresa_id' => $request->empresa_id ?? null, // Usa un valor predeterminado o realiza la lógica adecuada
            'fecha_inicial' => $request->fecha_inicial,
            'fecha_final' => $request->fecha_final,
            'usuario_id' => $request->usuario_id ?? null, // Asume valores opcionales o null si no se proporcionan
            'division_id' => $request->division_id ?? null,
            'estado_id' => $request->estado_id ?? null,
            'calificacion' => $request->calificacion ?? null,
        ]);
    
        // Redireccionar a la página de índice de proyectos con un mensaje de éxito
        return redirect()->route('proyectos.index')
            ->with('success', 'Proyecto creado satisfactoriamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Proyecto $proyecto)
    {
        return view('proyectos.show', compact('proyecto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Proyecto $proyecto)
    {
        return view('proyectos.edit', compact('proyecto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Proyecto $proyecto)
    {
        $request->validate([
            // Aquí puedes agregar reglas de validación para los campos del formulario si es necesario
        ]);

        $proyecto->update($request->all());

        return redirect()->route('proyectos.index')
            ->with('success', 'Proyecto actualizado satisfactoriamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Proyecto $proyecto)
    {
        $proyecto->delete();

        return redirect()->route('proyectos.index')
            ->with('success', 'Proyecto eliminado satisfactoriamente.');
    }
}
