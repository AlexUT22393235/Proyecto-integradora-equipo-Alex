<?php

namespace App\Http\Controllers\AdminControllers;

use Session;
use Redirect;
use App\Http\Controllers\Controller; // ! Importa la clase base Controller
use App\Http\RequestsAdmin\DirectivoRequest; // ! Importa RequestsAdmin
use App\Http\RequestsAdmin\DirectivoUpdateRequest; // ! Importa RequestsAdmin
use App\Models\ModelsAdmin\DireccionAdmin; // ! Modelo de Asesores
use Illuminate\Support\Facades\DB;

class DireccionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $directivo = DireccionAdmin::all(); // O cualquier otra lógica para obtener los usuarios
        // return view('CrudDireccionDeAdmin', compact('directivo'));
        $directivo = DB::select('CALL getUsers(?)',[4]);
        $divisiones = DB::select('select * from divisiones'); 
        $role = DB::select('select * from tipo_usuarios');
        $status = DB::select('select * from estados');
        return view('CrudDireccionDeAdmin', compact('directivo', 'divisiones', 'role','status'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $directivo  = DB::select('CALL getUsers(?)',[4]); // O cualquier otra lógica para obtener los usuarios
        return view('CrudDireccionDeAdmin', compact('directivo'));
        // $directivo = DireccionAdmin::all(); // O cualquier otra lógica para obtener los usuarios
        // return view('CrudDireccionDeAdmin', compact('directivo'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DirectivoRequest $request)
    {
        {
            // Instancio al modelo Productos que hace llamado a la tabla 'productos' de la Base de Datos
            $directivo = new DireccionAdmin; 
    
            // Recibo todos los datos del formulario de la vista 'crear.blade.php'
            // $directivo->id_usuario = $request->id_usuario;
            $directivo->nombres = $request->nombres;
            $directivo->apellidos = $request->apellidos;
            $directivo->identificador = $request->identificador;
            $directivo->contrasena = $request->contrasena;
            $directivo->tipo_usuario_id = $request->tipo;
            $directivo->division_id = $request->nombre;
            $directivo->estado_id = $request->estado;
            // Inserto todos los datos en mi tabla 'directivo' 
            $directivo->save();
    
            // Hago una redirección a la vista principal con un mensaje 
            return redirect()->route('CrudDireccionDeAdmin.index')->with('message','Guardado Satisfactoriamente !'); 
        } 
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $directivo = DireccionAdmin::find($id);
        return view('CrudDireccionDeAdmin', compact('directivo')); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $directivo = DireccionAdmin::find($id);
        return view('CrudDireccionDeAdmin',['directivo'=>$directivo]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DirectivoUpdateRequest $request, $id)
    {
        $directivo = new DireccionAdmin; 
    
        // Recibo todos los datos del formulario de la vista 'crear.blade.php'
        $directivo->id_usuario = $request->id_usuario;
        $directivo->nombres = $request->nombres;
        $directivo->apellidos = $request->apellidos;
        $directivo->identificador = $request->identificador;
        // $directivo->contrasena = $request->contrasena;
        $directivo->division_id = $request->division_id;
        $directivo->estado_id = $request->estado_id;
        // Inserto todos los datos en mi tabla 'directivo' 
        $directivo->save();

        // Muestro un mensaje y redirecciono a la vista principal 
        // Session::flash('message', 'Editado Satisfactoriamente !');
        // return Redirect::to('CrudDireccionDeAdmin');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Elimino el registro de la tabla 'productos' 
        DireccionAdmin::destroy($id);

        // Muestro un mensaje y redirecciono a la vista principal 
        // Session::flash('message', 'Eliminado Satisfactoriamente !');
        // return Redirect::to('CrudDireccionDeAdmin');
    }
}
