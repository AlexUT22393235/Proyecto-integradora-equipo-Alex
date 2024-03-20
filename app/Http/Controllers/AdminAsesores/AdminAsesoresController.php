<?php

namespace App\Http\Controllers\AdminAsesores;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use app\Models\ModelsAdminAsesores\AdminAsesores;
use Illuminate\Support\Facades\DB;

class AdminAsesoresController extends Controller
{
    public function index()
    {
        // $asesor = AsesorAdmin::all(); // O cualquier otra lógica para obtener los usuarios
        // return view('CrudAsesorDeAdmin', compact('asesor'));
        $asesor = DB::select('CALL getUsers(?)', [2]);
        $divisiones = DB::select('select * from divisiones');
        $role = DB::select('select * from tipo_usuarios');
        $status = DB::select('select * from estados');
        return view('CrudAsesores', compact('asesor', 'divisiones', 'role', 'status'));
    }
}
