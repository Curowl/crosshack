<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('foto_perfil')->nullable(); // La columna "foto_perfil" es opcional y puede ser nula
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('foto_perfil'); // Elimina la columna en caso de hacer una reversión
        });
    }
};
