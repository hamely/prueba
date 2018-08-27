<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonaGradoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persona_grado', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('persona_id')->unsigned()->index();
            $table->integer('grado_id')->unsigned()->index()->nullable();
            $table->date('fechaAsignacion')->nullable();
            $table->string('observacion')->nullable();
            $table->foreign('persona_id')->references('id')->on('persona');
            $table->foreign('grado_id')->references('id')->on('grado');
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
        Schema::dropIfExists('persona_grado');
    }
}
