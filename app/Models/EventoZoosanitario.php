<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventoZoosanitario extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'tipo_evento',
        'fecha_evento',
        'descripcion',
        'notas_adicionales',
        'imagen',
    ];

    public function usuario()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
