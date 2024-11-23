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
        Schema::create('det_subfase', function (Blueprint $table) {
            $table->increments('id_det_subfase'); // id_subfase como clave primaria
            $table->foreignId('subfase_id'); // Relación con la tabla tbl_subfase
            $table->text('obj_subfase')->nullable(); // obj_subfase (campo de texto pequeño)
            $table->date('fecha_creacion')->nullable(); // fecha_creacion
            $table->boolean('activo')->nullable(); // activo
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('det_subfase');
    }
};