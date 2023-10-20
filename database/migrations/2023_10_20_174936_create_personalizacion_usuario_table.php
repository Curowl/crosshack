<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('personalizacion_usuario', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->json('preferencias_calendario'); // Columna JSON para almacenar preferencias
            $table->json('preferencias_recomendaciones'); // Columna JSON para almacenar preferencias
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    public function down()
    {
        Schema::dropIfExists('personalizacion_usuario');
    }
};
