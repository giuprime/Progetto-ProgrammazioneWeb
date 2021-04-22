<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDipartimento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dipartimento', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->integer('CAP');
            $table->integer('numero_civico')->nullable();
            $table->string('via');
            $table->string('citta');
            $table->string('provincia');
            $table->integer('id_direttore')->unsigned();
            $table->foreign('id_direttore')->references('id')->on("direttore")->onDelete('CASCADE')->onUpdate('CASCADE');
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
        Schema::dropIfExists('dipartimento');
    }
}
