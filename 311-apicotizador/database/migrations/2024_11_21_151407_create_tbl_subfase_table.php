<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblSubfaseTable extends Migration
{
    /**
     * Ejecuta la migración.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_subfase', function (Blueprint $table) {
            $table->increments('id_subfase'); // id_subfase como clave primaria
            $table->foreignId('fase_id'); // Relación con la tabla tbl_fase
            $table->integer('foto_id')->nullable(); // Relación con una tabla de fotos (ajusta si es necesario)
            $table->integer('no_fase')->nullable(); // no_fase
            $table->string('nombre_fase', 500)->nullable(); // nombre_fase
            $table->string('tipo_fase', 300)->nullable(); // tipo_fase
            $table->integer('orden')->nullable(); // orden
            $table->date('fecha_creacion')->nullable(); // fecha_creacion
            $table->boolean('activo')->nullable(); // activo
        });
    }

    /**
     * Revierte la migración.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_subfase');
    }
};
