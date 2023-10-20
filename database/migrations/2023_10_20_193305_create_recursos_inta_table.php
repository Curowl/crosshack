<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('recursos_inta', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_recurso');
            $table->string('tipo_recurso');
            $table->text('descripcion');
            $table->string('enlace');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('recursos_inta');
    }
};
