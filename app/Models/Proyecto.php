<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Proyecto extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'objetivo',
        'justificacion',
        'planteamiento',
        'actividades',
        'empresa_id',
        'fecha_inicial',
        'fecha_final',
        'usuario_id',
        'division_id',
        'estado_id',
        'calificacion',
    ];

    public $timestamps = false;
}
