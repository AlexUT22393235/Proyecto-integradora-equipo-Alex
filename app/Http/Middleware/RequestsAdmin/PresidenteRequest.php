<?php

namespace App\Http\Requests;

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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nombres' => 'required|string|max:50',
            'apellidos' => 'nullable|string|max:50',
            'identificador' => 'required|string|max:20',
            'contrasena' => 'required|string',
            'tipo_usuario_id' => 'required|integer',
            'division_id' => 'required|integer|exists:divisiones,id',
            'estado_id' => 'required|integer|exists:estados,id'
        ];
    }
}
