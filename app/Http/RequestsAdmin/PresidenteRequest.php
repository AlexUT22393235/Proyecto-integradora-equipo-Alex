<?php

namespace App\Http\RequestsAdmin; //! USAR EL NOMBRE DE LA CARPETA RequestsAdmin

use Illuminate\Foundation\Http\FormRequest;

class PresidenteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true;
    }


    /**
     * Get the validation rules that apply to the request.
     *
    //  * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        return [
            'nombres' => 'required|string|max:50',
            'apellidos' => 'nullable|string|max:50',
            'identificador' => 'required|string|max:20',
            // 'contrasena' => 'required|string',
            'tipo' => 'required|integer|exists:tipo_usuarios,id_tipo_usuario',
            'nombre' => 'required|integer|exists:divisiones,id_division',
            'estado' => 'required|integer|exists:estados,id_estado'
        ];
    }
}
