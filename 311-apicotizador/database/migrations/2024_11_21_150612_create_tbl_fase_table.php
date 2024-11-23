<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblFaseTable extends Migration
{
    /**
     * Ejecuta la migración.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_fase', function (Blueprint $table) {
            $table->increments('id_fase'); // id_fase como clave primaria
            $table->integer('proyecto_id'); // Relación con la tabla de proyectos (ajusta si es necesario)
            $table->integer('svg_id')->nullable(); // Relación con la tabla de SVG (ajusta si es necesario)
            $table->string('nombre_fase', 300)->nullable(); // nombre_fase
            $table->string('tipo_fase', 300)->nullable(); // tipo_fase
            $table->integer('no_fase')->nullable(); // no_fase
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
        Schema::dropIfExists('tbl_fase');
    }
}
