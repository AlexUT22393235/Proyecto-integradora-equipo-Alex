<?php

namespace App\Models\ModelsAlex;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ModelsAlex\proyectos;

class estados extends Model
{
    protected $table = 'estados';

    public function proyectos()
    {
        // Si necesitas obtener todos los proyectos con este estado
        return $this->hasMany(proyectos::class, 'estado_id', 'id_estado');
    }
}
