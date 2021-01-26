<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAeropuertosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aeropuertos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('codigo_aeropuerto')->nullable();
            $table->string('nombre_aeropuerto')->nullable();
            $table->string('ciudad_aeropuerto')->nullable();
            $table->string('pais_aeropuerto')->nullable();
            $table->timestamp('hora_despegue')->nullable();
            $table->timestamp('hora_aterrizaje')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('aeropuertos');
    }
}
