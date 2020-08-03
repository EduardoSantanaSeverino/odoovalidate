<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAtentadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atentados', function($newTable){
            $newTable->increments('id');
            $newTable->string('FechaMaquina');
            $newTable->string('FechaVence');
            $newTable->string('FechaVenceNueva');
            $newTable->integer('ClienteId');
            $newTable->string('HashId');
            $newTable->boolean('Exitoso');
            $newTable->string('locationhref');
            $newTable->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('atentados');
    }
}
