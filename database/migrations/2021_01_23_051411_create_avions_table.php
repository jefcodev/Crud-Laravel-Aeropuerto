<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAvionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avions', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('numero_placa')->nullable();
            $table->string('nombre_avion')->nullable();
            $table->integer('capacidad')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('avions');
    }
}
