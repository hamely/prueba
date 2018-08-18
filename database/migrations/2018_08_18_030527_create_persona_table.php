<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persona', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cip');
            $table->string('apellidopaterno');
            $table->string('apellidomaterno');
            $table->string('nombres');
            $table->date('fechanacimiento')->nullable();
            $table->integer('celular')->nullable();
            $table->integer('cuenta')->nullable();
            $table->integer('dni')->nullable();
            $table->string('estadocivil')->nullable();
            $table->string('sexo')->nullable();
            $table->string('email')->nullable();
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
        Schema::dropIfExists('persona');
    }
}
