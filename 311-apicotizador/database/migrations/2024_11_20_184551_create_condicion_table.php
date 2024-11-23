<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_condicion', function (Blueprint $table) {
            $table->increments('id_condicion'); // PRIMARY KEY
            $table->integer('proyecto_id'); // NOT NULL
            $table->string('clave', 300)->nullable(); // varchar(300) DEFAULT NULL
            $table->string('valor', 1000)->nullable(); // varchar(1000) DEFAULT NULL
            $table->string('descripcion', 350)->nullable(); // varchar(350) DEFAULT NULL
            $table->date('fecha_creacion')->nullable(); // date DEFAULT NULL
            $table->integer('activo')->nullable(); // int DEFAULT NULL
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cat_condicion');
    }
};
