<?php

namespace App\Models\ModelsAdmin; //!IMPORTAR RUTA DE EL MODELO

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;



class AsesorAdmin extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'usuarios';
    protected $fillable = [
        'nombres',
        'apellidos',
        'identificador',
        'contrasena',
        'tipo_usuario_id',
        'division_id',
        'estado_id',
    ];

    public $timestamps = false;

    public function setContrasenaAttribute($value)
    {
        $this->attributes['contrasena'] = Hash::make($value);
    }
    
}
