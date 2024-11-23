<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('rel_usuario_empresa_proyecto', function (Blueprint $table) {
            $table->increments('id_usuario_empresa_proyecto'); // id_usuario_empresa_proyecto como clave primaria
            $table->integer('usuario_id');
            $table->integer('empresa_proyecto_id');
            $table->date('fecha_creacion')->nullable(); // fecha_creacion
            $table->boolean('activo')->nullable(); // activo
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rel_usuario_empresa_proyecto');
    }
};
