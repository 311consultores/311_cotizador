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
        Schema::create('tbl_proyecto', function (Blueprint $table) {
            $table->increments('id_proyecto'); // AUTO_INCREMENT y PRIMARY KEY
            $table->integer('empresa_id'); // int DEFAULT NULL
            $table->integer('foto_id')->nullable(); // int DEFAULT NULL
            $table->integer('svg_id')->nullable(); // int DEFAULT NULL
            $table->string('nombre_proyecto', 300); // varchar(300) DEFAULT NULL
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
        Schema::dropIfExists('tbl_proyecto');
    }
};
