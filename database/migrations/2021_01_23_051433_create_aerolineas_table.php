<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAerolineasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aerolineas', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('codigo_aerolinea')->nullable();
            $table->string('nombre_aerolinea')->nullable();
            $table->string('pais_aerolinea')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('aerolineas');
    }
}
