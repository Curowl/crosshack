<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActualizacionNoticia extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'contenido',
        'fecha_publicacion',
        'imagen',
    ];
}
