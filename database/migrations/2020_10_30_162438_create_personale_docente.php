<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonaleDocente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personale_docente', function (Blueprint $table) {
         $table->increments('id');
         $table->string('nome');
         $table->string('cognome');
         $table->string('email');
         $table->string('numero_di_telefono')->nullable();
         $table->integer('id_locale')->unsigned();
         $table->foreign('id_locale')->references('id')->on('locale')->onDelete('CASCADE')->onUpdate('CASCADE');
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
        Schema::dropIfExists('personale_docente');
    }
}
