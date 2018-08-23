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
            $table->integer('numerocomision');
            $table->integer('comision_id')->unsigned()->index();
            $table->integer('ubigeo_id')->unsigned()->index();
            $table->string('lugarcomision');       
            $table->date('fechaemision')->nullable(); ; //fecha del sistema
            $table->string('motivo');
            $table->string('disposicion');
            $table->date('fechasalida'); //Ejemplo sale hoy 20 de agosto 1 las 19 horas
            $table->string('horasalida');
            $table->date('fechallegada'); //Ejemplo llega viernes 24 de agosto a las 19 horas (habilitado)
            $table->string('horallegada'); //(habilitado)
            $table->date('fecharetorno')->nullable(); //Deberia coincidir si realmente llego o retorno el dia que pusieron
            $table->string('horaretorno')->nullable();
            $table->string('observacion')->nullable(); //(habilitado)
            $table->string('estado');
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
