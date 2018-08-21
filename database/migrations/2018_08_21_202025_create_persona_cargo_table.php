<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonaCargoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persona_cargo', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fechaAsignacion');
            $table->string('observacion');
            $table->integer('persona_id')->unsigned()->index();
            $table->integer('cargo_id')->unsigned()->index();
            $table->foreign('persona_id')->references('id')->on('persona');
            $table->foreign('cargo_id')->references('id')->on('cargo');
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
        Schema::dropIfExists('persona_cargo');
    }
}
