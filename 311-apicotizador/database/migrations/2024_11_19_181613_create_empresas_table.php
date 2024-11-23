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
        Schema::create('tbl_empresa', function (Blueprint $table) {
            $table->increments('id_empresa'); // AUTO_INCREMENT y PRIMARY KEY
            $table->string('nombre_empresa', 300)->nullable(); // varchar(300) DEFAULT NULL
            $table->integer('foto_id')->nullable(); // int DEFAULT NULL
            $table->integer('direccion_id')->nullable(); // int DEFAULT NULL
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
        Schema::dropIfExists('tbl_empresa');
    }
};
