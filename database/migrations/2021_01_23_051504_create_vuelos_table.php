<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVuelosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vuelos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('codigo_vuelo')->nullable();
            $table->time('hdesp_vuelo')->nullable();
            $table->time('hater_vuelo')->nullable();
            $table->date('fecha_vuelo')->nullable();
            $table->integer('pocup_vuelo')->nullable();
            $table->integer('pvac_vuelo')->nullable();
            $table->string('escala_vuelo')->nullable();
            $table->integer('fk_avion_id_avi')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('vuelos');
    }
}
