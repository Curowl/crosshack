<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('biblioteca_inta', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->longText('contenido'); // Utilizamos longText para almacenar texto extenso
            $table->string('categoria');
            $table->string('imagen')->nullable(); // Columna para imágenes (opcional)
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('biblioteca_inta');
    }
    
};
