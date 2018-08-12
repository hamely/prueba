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
            $table->char('cip',8);
            $table->char('dni',8);
            $table->integer('cuenta');
            $table->date('fechanacimiento');
            $table->char('sexo',9);
            $table->string('apellidopaterno');
            $table->string('apellidomaterno');
            $table->string('nombres');
            $table->char('celular',9);
            $table->string('gruposanguineo');
            $table->string('emailpersonal');
            $table->string('emailinstitucional');
            $table->char('estadocivil',15);
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
