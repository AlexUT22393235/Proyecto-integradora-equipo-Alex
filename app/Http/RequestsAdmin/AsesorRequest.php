<?php

namespace App\Http\RequestsAdmin; //! USAR EL NOMBRE DE LA CARPETA RequestsAdmin

use Illuminate\Foundation\Http\FormRequest;

class AsesorRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

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

    // public function messages()
    // {
    //     return [
    //         'nomina.required' => 'El campo Nómina es obligatorio.',
    //         'nombre.required' => 'El campo Nombre es obligatorio.',
    //         'division.required' => 'El campo División es obligatorio.',
    //         'proyectos.required' => 'El campo Proyectos Asignados es obligatorio.',
    //         'estatus.required' => 'El campo Estatus es obligatorio.',
    //     ];
    // }
}
