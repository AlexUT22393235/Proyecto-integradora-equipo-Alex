<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;


class AsesorAdmin extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'usuarios';
    protected $fillable = [
        'id_usuario',
        'identificador',
        'nombres',
        'apellidos',
        'contrasena',
        'tipo_usuario_id',
        'division_id',
        'estado_id',
    ];
}
