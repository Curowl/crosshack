<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('recomendaciones_productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_producto');
            $table->text('descripcion');
            $table->string('categoria');
            $table->string('imagen')->nullable(); // Columna para imágenes (opcional)
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('recomendaciones_productos');
    }
};
