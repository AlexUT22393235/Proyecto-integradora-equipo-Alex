<?php

namespace App\Http\Controllers\AdminControllers;

// use Illuminate\Http\Request;
use Session;
use Redirect;
use App\Http\Controllers\Controller; // ! Importa la clase base Controller
use App\Http\RequestsAdmin\AsesorRequest; // ! Importa RequestsAdmin
use App\Http\RequestsAdmin\AsesorUpdateRequest; // ! Importa RequestsAdmin
use App\Models\ModelsAdmin\AsesorAdmin; // ! Modelo de Asesores
use Illuminate\Support\Facades\DB;

class AsesorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $asesor = AsesorAdmin::all(); // O cualquier otra lógica para obtener los usuarios
        // return view('CrudAsesorDeAdmin', compact('asesor'));
        $asesor = DB::select('CALL getUsers(?)', [2]);
        $divisiones = DB::select('select * from divisiones');
        $role = DB::select('select * from tipo_usuarios');
        $status = DB::select('select * from estados');
        return view('CrudAsesorDeAdmin', compact('asesor', 'divisiones', 'role', 'status'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $asesor = DB::select('CALL getUsers(?)', [2]); // O cualquier otra lógica para obtener los usuarios
        return view('CrudAsesorDeAdmin', compact('asesor'));

        // $asesor = Division::all();
        // return view('CrudAsesorDeAdmin', compact('asesor'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AsesorRequest $request)
    { {
            // dd($request->all());
            // Instancio al modelo Productos que hace llamado a la tabla 'productos' de la Base de Datos
            $asesor = new AsesorAdmin;

            // Recibo todos los datos del formulario de la vista 'crear.blade.php'
            // $asesor->id_usuario = $request->id_usuario;
            $asesor->nombres = $request->nombres;
            $asesor->apellidos = $request->apellidos;
            $asesor->identificador = $request->identificador;
            $asesor->contrasena = $request->contrasena;
            $asesor->tipo_usuario_id = $request->tipo;
            $asesor->division_id = $request->nombre;
            $asesor->estado_id = $request->estado;
            // Inserto todos los datos en mi tabla 'directivo' 
            $asesor->save();

            // Hago una redirección a la vista principal con un mensaje 
            return redirect()->route('CrudAsesorDeAdmin.index')->with('message', 'Guardado Satisfactoriamente !');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $asesor = AsesorAdmin::find($id);
        return view('CrudAsesorDeAdmin', compact('asesor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $asesor = AsesorAdmin::find($id);
        return view('CrudAsesorDeAdmin', ['asesor' => $asesor]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AsesorUpdateRequest $request, $id)
    {
        $asesor = new AsesorAdmin;

        // Recibo todos los datos del formulario de la vista 'crear.blade.php'
        $asesor->id_usuario = $request->id_usuario;
        $asesor->nombres = $request->nombres;
        $asesor->apellidos = $request->apellidos;
        $asesor->identificador = $request->identificador;
        // $asesor->contrasena = $request->contrasena;
        $asesor->division_id = $request->division_id;
        $asesor->estado_id = $request->estado_id;
        // Inserto todos los datos en mi tabla 'directivo' 
        $asesor->save();

        // Muestro un mensaje y redirecciono a la vista principal 
        // Session::flash('message', 'Editado Satisfactoriamente !');
        // return Redirect::to('CrudAsesorDeAdmin');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Elimino el registro de la tabla 'productos' 
        AsesorAdmin::destroy($id);

        // Muestro un mensaje y redirecciono a la vista principal 
        // Session::flash('message', 'Eliminado Satisfactoriamente !');
        // return Redirect::to('CrudAsesorDeAdmin');
    }
}
