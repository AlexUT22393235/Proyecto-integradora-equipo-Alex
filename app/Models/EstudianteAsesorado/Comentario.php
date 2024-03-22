<?php

namespace App\Models\EstudianteAsesorado;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;

    protected $table = 'comentarios';
    protected $fillable = [
        'usuario_id',
        'comentario',
        'proyecto_id',
        'estado_id',
    ];

    public $timestamps = false;
}
