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
        Schema::create('cat_svg', function (Blueprint $table) {
            $table->increments('id_svg'); // AUTO_INCREMENT y PRIMARY KEY
            $table->string('path', 300); // varchar(300) DEFAULT NULL
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
        Schema::dropIfExists('cat_svg');
    }
};
