<?php

namespace App\Http\Controllers\ControllerJonny;

use App\Models\ModeloJonny\Anteproyecto;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AnteproyectoController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    public function index()
    {

        $documentos = DB:: select('CALL obtener_documentos()');// Obtener todos los documentos desde la base de datos
        //dd($documentos);
        return view('DocsDireccion', compact('documentos'));
    }
}