<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsignarComisionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asignar_comision', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('persona_id')->unsigned()->index();
            $table->integer('comision_id')->unsigned()->index();
            $table->integer('ubigeo_id')->unsigned()->index();
             
            $table->foreign('persona_id')->references('id')->on('persona');
            $table->foreign('comision_id')->references('id')->on('comision');
            $table->foreign('ubigeo_id')->references('id')->on('ubigeo');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asignar_comision');
    }
}
