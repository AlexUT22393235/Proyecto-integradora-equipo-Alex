<?php

namespace App\Http\RequestsActivity; 

use Illuminate\Foundation\Http\FormRequest;

class ActivityRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'titulo' => 'required|string|max:255',
            'tarea' => 'required|string',
            'fecha_inicial' => 'required|date',
            'fecha_final' => 'required|date|after:fecha_inicial',
        ];
    }
}