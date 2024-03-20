<?php

namespace App\Http\Controllers\AdminControllers;

// use Illuminate\Http\Request;
use Session;
use Redirect;
use App\Http\Controllers\Controller; // ! Importa la clase base Controller
use App\Http\RequestsAdmin\PresidenteRequest; // ! Importa RequestsAdmin
use App\Http\RequestsAdmin\PresidenteUpdateRequest; // ! Importa RequestsAdmin
use App\Models\ModelsAdmin\PresidenteAdmin; // ! Modelo de Asesores
use Illuminate\Support\Facades\DB;

class PresidenteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    { {
            // $presidente = PresidenteAdmin::all(); // O cualquier otra lógica para obtener los usuarios
            // return view('CrudPresidenteDeAdmin', compact('presidente'));
            $presidente = DB::select('CALL getUsers(?)',[3]);
            $divisiones = DB::select('select * from divisiones'); 
            $role = DB::select('select * from tipo_usuarios');
            $status = DB::select('select * from estados');
            return view('CrudPresidenteDeAdmin', compact('presidente', 'divisiones', 'role','status'));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $presidente = PresidenteAdmin::all(); // O cualquier otra lógica para obtener los usuarios
        // return view('CrudPresidenteDeAdmin', compact('presidente'));
        $presidente = DB::select('CALL getUsers(?)',[3]); // O cualquier otra lógica para obtener los usuarios
        return view('CrudPresidenteDeAdmin', compact('presidente'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PresidenteRequest $request)
    {{
        // Instancio al modelo Productos que hace llamado a la tabla 'productos' de la Base de Datos
        $presidente = new PresidenteAdmin;

        // Recibo todos los datos del formulario de la vista 'crear.blade.php'
            // $presidente->id_usuario = $request->id_usuario;
            $presidente->nombres = $request->nombres;
            $presidente->apellidos = $request->apellidos;
            $presidente->identificador = $request->identificador;
            $presidente->contrasena = $request->contrasena;
            $presidente->tipo_usuario_id = $request->tipo;
            $presidente->division_id = $request->nombre;
            $presidente->estado_id = $request->estado;
        // Inserto todos los datos en mi tabla 'directivo' 
        $presidente->save();

        // Hago una redirección a la vista principal con un mensaje 
        return redirect()->route('CrudPresidenteDeAdmin.index')->with('message', 'Guardado Satisfactoriamente !');
    }}

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $presidente = PresidenteAdmin::find($id);
        return view('CrudPresidenteDeAdmin', compact('presidente'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $presidente = PresidenteAdmin::find($id);
        return view('CrudPresidenteDeAdmin', ['presidente' => $presidente]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PresidenteUpdateRequest $request, $id)
    {
        $presidente = new PresidenteAdmin;

        // Recibo todos los datos del formulario de la vista 'crear.blade.php'
            $presidente->id_usuario = $request->id_usuario;
            $presidente->nombres = $request->nombres;
            $presidente->apellidos = $request->apellidos;
            $presidente->identificador = $request->identificador;
            // $presidente->contrasena = $request->contrasena;
            $presidente->division_id = $request->division_id;
            $presidente->estado_id = $request->estado_id;
        // Inserto todos los datos en mi tabla 'directivo' 
        $presidente->save();

        // Muestro un mensaje y redirecciono a la vista principal 
        // Session::flash('message', 'Editado Satisfactoriamente !');
        // return Redirect::to('CrudPresidenteDeAdmin');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Elimino el registro de la tabla 'productos' 
        PresidenteAdmin::destroy($id);

        // Muestro un mensaje y redirecciono a la vista principal 
        // Session::flash('message', 'Eliminado Satisfactoriamente !');
        // return Redirect::to('CrudPresidenteDeAdmin');
    }
}
