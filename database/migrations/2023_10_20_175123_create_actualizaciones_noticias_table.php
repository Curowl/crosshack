<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('actualizaciones_noticias', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->longText('contenido'); // Utilizamos longText para almacenar texto extenso
            $table->timestamp('fecha_publicacion');
            $table->string('imagen')->nullable(); // Columna para imágenes (opcional)
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('actualizaciones_noticias');
    }
};
