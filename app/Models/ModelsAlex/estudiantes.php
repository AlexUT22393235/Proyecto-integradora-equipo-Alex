<?php

namespace App\Models\ModelsAlex;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ModelsAlex\proyectos;
class estudiantes extends Model
{
    protected $fillable = [
        'id_estudiante',
        'nombres',
        'apellidos',
        'matricula',
        'contrasena',
        'foto',
        'carrera_id',
        'proyecto_id',
        'tipo_usuario_id',
        'calificacion_final'
    ];

    public $timestamps = false;
}
