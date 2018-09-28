<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonaDescansoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persona_descanso', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('persona_id')->unsigned()->index();
            $table->integer('descanso_id')->unsigned()->index();
            $table->string('numerodescanso')->nullable(); 
            $table->string('expedido')->nullable(); 
            $table->date('fechaemision')->nullable();
            $table->date('fechatermino')->nullable();
            $table->integer('dia')->nullable();
            $table->integer('anio')->nullable();
            $table->string('observacion')->nullable(); 
            $table->integer('usuario_id')->unsigned()->index();
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
        Schema::dropIfExists('persona_descanso');
    }
}
