<?php
//CREO CONTROLADOR DE DOCUMENTOS PARA METODOS QUE TENDRAN,GUARDAR, VER, EDITAR ETC.AQUI ESTARA TODO LO
// RELACIONADO CON DOCUMENTOS
namespace App\Http\Controllers;

use App\Models\Documento;
use Illuminate\Http\Request;

class DocumentoController extends Controller
{
    public function index()
    {
        // Mostrar todos los documentos
        $documentos = Documento::all();
        return view('documentos.index', compact('documentos'));
    }

    public function show($id)
    {
        // Mostrar un documento específico
        $documento = Documento::findOrFail($id);
        return view('documentos.show', compact('documento'));
    }

    public function store(Request $request)
    {
        // Agregar un nuevo documento
        $documento = new Documento();
        $documento->nombre = $request->input('nombre');
        // Guardar otros campos del documento, como archivo, etc.
        $documento->save();

        return redirect()->route('documentos.index');
    }

    public function update(Request $request, $id)
    {
        // Actualizar un documento existente
        $documento = Documento::findOrFail($id);
        $documento->nombre = $request->input('nombre');
        // Actualizar otros campos del documento si es necesario
        $documento->save();

        return redirect()->route('documentos.index');
    }

    public function destroy($id)
    {
        // Eliminar un documento
        $documento = Documento::findOrFail($id);
        $documento->delete();

        return redirect()->route('documentos.index');
    }
}
