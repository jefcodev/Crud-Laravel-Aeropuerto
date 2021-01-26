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
            $table->integer('plazas_vacias')->nullable();
            $table->integer('plazas_ocupadas')->nullable();
            $table->string('vuelo_directo')->nullable();
            $table->string('vuelo_escala')->nullable();
            $table->timestamp('fecha_vuelo')->nullable();
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
