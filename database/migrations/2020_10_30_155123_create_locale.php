<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocale extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locale', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipologia');
            $table->string('classificazione')->nullable();
            $table->integer('numero');
            $table->integer('id_dipartimento')->unsigned();
            $table->foreign('id_dipartimento')->references('id')->on('dipartimento')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->timestamps();
        });


        Artisan::call('db:seed', [
            '--class' => CreateLocaleSeeder::class,
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('locale');
    }
}
