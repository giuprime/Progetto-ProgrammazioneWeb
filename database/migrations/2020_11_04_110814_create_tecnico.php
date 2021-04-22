<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTecnico extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tecnico', function (Blueprint $table) {
          $table->increments('id');
          $table->string('nome');
          $table->string('cognome');
          $table->string('email');
          $table->string('numero_di_telefono');
          $table->date('inizio_contratto');
          $table->date('fine_contratto');
          $table->string('specializzazione');
          $table->integer('id_dipartimento')->unsigned();
          $table->foreign('id_dipartimento')->references('id')->on('dipartimento')->onDelete('CASCADE')->onUpdate('CASCADE');
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
        Schema::dropIfExists('tecnico');
    }
}
