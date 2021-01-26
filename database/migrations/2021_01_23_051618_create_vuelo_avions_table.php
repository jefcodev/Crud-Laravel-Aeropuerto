<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVueloAvionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vuelo_avions', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('codigo_vuelo')->nullable();
            $table->string('numero_placa')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('vuelo_avions');
    }
}
