<?php
namespace App\Http\Controllers\ControllerJonny;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\ModeloJonny\libros; // Ajusta la importación del modelo
use Illuminate\Database\Eloquent\Model; // Importa la clase Model

class LibrosController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function mostrarLibros()
    {
        $libros = libros::all(); // Ajusta la referencia al modelo
        return view('ControlLibros', compact('libros'));
    }
}
