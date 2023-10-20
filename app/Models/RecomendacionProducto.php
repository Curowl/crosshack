<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecomendacionProducto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_producto',
        'descripcion',
        'categoria',
        'imagen',
    ];
}
