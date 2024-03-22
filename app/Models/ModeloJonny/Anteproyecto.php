<?php

namespace App\Models\ModeloJonny;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anteproyecto extends Model
{
    use HasFactory;

        protected $table = 'documentos_estudiantes';//nombre de la tabla

        //Campos de la tabla
        protected $fillable = [
            'url',
            'tipo_documento_id',
            'estudiante_id',
        ];
}
