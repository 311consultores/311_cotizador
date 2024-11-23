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
        Schema::create('cat_configuracion', function (Blueprint $table) {
            $table->increments('id_config'); // AUTO_INCREMENT y PRIMARY KEY
            $table->integer('empresa_id'); // int DEFAULT NULL
            $table->string('clave', 150)->nullable(); // varchar(150) DEFAULT NULL
            $table->string('valor', 1000)->nullable(); // varchar(1000) DEFAULT NULL
            $table->string('descripcion', 250)->nullable(); // varchar(250) DEFAULT NULL
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
        Schema::dropIfExists('cat_configuracion');
    }
};