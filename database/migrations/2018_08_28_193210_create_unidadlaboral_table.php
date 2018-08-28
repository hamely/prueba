<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnidadlaboralTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unidadlaboral', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('codigo');
            $table->string('nivel1');
            $table->string('nivel2')->nullable();
            $table->string('nivel3')->nullable();
            $table->string('nivel4')->nullable();
            $table->string('nivel5')->nullable();
            $table->string('nivel6')->nullable();
            $table->string('nivel7')->nullable();
            $table->string('nivel8')->nullable();
            $table->string('nivel9')->nullable();
            $table->string('nivel10')->nullable();
            $table->string('nivel11')->nullable();
            $table->string('nivel12')->nullable();
            $table->string('nivel13')->nullable();
            $table->string('nivel14')->nullable();
            $table->string('observacion')->nullable();
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
        Schema::dropIfExists('unidadlaboral');
    }
}
