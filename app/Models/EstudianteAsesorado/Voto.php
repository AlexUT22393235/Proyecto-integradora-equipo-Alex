<?php

namespace App\Models\EstudianteAsesorado;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voto extends Model
{
    use HasFactory;
    protected $table = 'votos';
    protected $fillable = [
        'usuario_id',
        'proyecto_id',
        'motivo',
    ];

    public $timestamps = false;
}