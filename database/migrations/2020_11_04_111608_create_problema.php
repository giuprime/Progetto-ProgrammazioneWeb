<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProblema extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('problema', function (Blueprint $table) {

            $table->increments('id');
            $table->string('priorita');
            $table->string('descrizione');
            $table->integer('id_utente')->unsigned()->nullable();
            $table->foreign('id_utente')->references('id')->on('utente');
            $table->integer('id_tecnico')->unsigned()->nullable();
            $table->foreign('id_tecnico')->references('id')->on('tecnico')->onUpdate('CASCADE');
            $table->integer('id_docente')->unsigned()->nullable();
            $table->foreign('id_docente')->references('id')->on('personale_docente')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->integer('id_dipartimento')->unsigned()->nullable();
            $table->foreign('id_dipartimento')->references('id')->on('dipartimento');
            $table->integer('id_locale')->unsigned()->nullable();
            $table->foreign('id_locale')->references('id')->on('locale');
            $table->integer('id_categoria')->unsigned()->nullable();
            $table->foreign('id_categoria')->references('id')->on('categoria');
            $table->string('stato')->default('Incompleto');
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
        Schema::dropIfExists('problema');
    }
}
