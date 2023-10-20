<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecursoInta extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_recurso',
        'tipo_recurso',
        'descripcion',
        'enlace',
    ];
}
