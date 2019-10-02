<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('apellido', 50);
            $table->string('nombres', 50);
            $table->string('email', 100);
            $table->string('domicilio', 100);
            $table->string('telefono', 20);
            $table->string('dni', 12);
            $table->date('fecha_nacimiento');
            $table->string('slug', 190)->unique();
            $table->unsignedBigInteger('localidad_id');
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
        Schema::dropIfExists('personas');
    }
}
