<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
     /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function($newTable){
            $newTable->increments('id');
            $newTable->string('Nombre');
            $newTable->string('Telefono');
            $newTable->string('Email');
            $newTable->string('HashId');
            $newTable->string('FechaVence');
            $newTable->string('HostURL');
            $newTable->string('HashId2');
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
        Schema::drop('clientes');
    }
}
