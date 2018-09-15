<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovimientoPersonalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movimiento_personal', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('persona_id')->unsigned()->index();
            $table->integer('documento_id')->unsigned()->index();
            $table->string('numerodocumento')->nullable(); 
            $table->string('sigladocumento')->nullable();
            $table->date('fechadocumento')->nullable();
            $table->date('fechainclusion')->nullable();
            $table->date('fechaexclusion')->nullable();
            $table->date('fechacambiounidad')->nullable();
            $table->date('fechacambiocargo')->nullable();
            $table->date('fechacambiohorario')->nullable();
            $table->integer('movimiento_id')->unsigned()->index();
            $table->integer('tiempo')->nullable(); 
            $table->integer('unidad_id')->unsigned()->index();
            $table->integer('cargo_id')->unsigned()->index();
            $table->integer('cip_id')->unsigned()->index();
            $table->integer('horario_id')->unsigned()->index();
            $table->string('observacion')->nullable(); 
            $table->string('tipo')->nullable(); 
            $table->string('estado')->nullable(); 
            $table->integer('numeroregistro')->nullable(); 
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
        Schema::dropIfExists('movimiento_personal');
    }
}
