<?php

namespace App\Http\Requests\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComentarioRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
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
            'usuario_id' => 'required|integer|exists:usuarios,id_usuario',
            'comentario' => 'required|string',
            'proyecto_id' => 'required|integer|exists:proyectos,id_proyecto',
            'estado_id' => 'required|integer|exists:estados,id_estado',
        ];
    }
}
