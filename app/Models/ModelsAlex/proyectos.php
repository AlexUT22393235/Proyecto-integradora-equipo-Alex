<?php

namespace App\Models\ModelsAlex;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ModelsAlex\estados;
use App\Models\ModelsAlex\estudiantes;

class proyectos extends Model
{
    protected $table = 'proyectos';

    public function estudiantes()
    {
        // Asumiendo que hay una relación uno a muchos entre Proyecto y Estudiante
        return $this->hasMany(estudiantes::class, 'proyecto_id', 'id_proyecto');
    }

    public function estado()
    {
        // Relación de Proyecto a Estado
        return $this->belongsTo(estados::class, 'estado_id', 'id_estado');
    }
}