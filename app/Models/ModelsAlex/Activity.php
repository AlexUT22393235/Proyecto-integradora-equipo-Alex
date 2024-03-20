<?php

namespace App\Models\ModelsAlex;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;
    //Esto es el model
    protected $table = 'actividades';
    protected $fillable = ['titulo', 'tarea', 'fecha_inicial', 'fecha_final'];

    // Desactivar timestamps
    public $timestamps = false;

}
