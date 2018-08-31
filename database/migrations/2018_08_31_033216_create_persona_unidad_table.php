<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonaUnidadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persona_unidad', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('persona_id')->unsigned();
            $table->integer('unidad_id')->unsigned();
            $table->date('fechaAsignacion')->nullable();
            $table->string('observacion')->nullable();
            $table->foreign('persona_id')->references('id')->on('persona');
            $table->foreign('unidad_id')->references('id')->on('unidadlaboral');
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
        Schema::dropIfExists('persona_unidad');
    }
}
