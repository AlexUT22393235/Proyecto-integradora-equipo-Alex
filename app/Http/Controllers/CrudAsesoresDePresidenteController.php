<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrudAsesoresDePresidenteController extends Controller
{
    public function index()
    {
        $asesores = Asesor::all();
        return view('asesores.index', compact('asesores'));
    }
    
    // Otros métodos como create, store, edit, update, destroy, etc. según tus necesidades
}