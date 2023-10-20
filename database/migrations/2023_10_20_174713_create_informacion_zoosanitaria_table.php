<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('informacion_zoosanitaria', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->text('descripcion');
            $table->string('categoria');
            $table->string('imagen')->nullable(); // Columna para imágenes (opcional)
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('informacion_zoosanitaria');
    }
};
