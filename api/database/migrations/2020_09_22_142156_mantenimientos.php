<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Mantenimientos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('mantenimientos', function (Blueprint $table) {
            $table->integer('id');
            $table->date('fecha_actual');
            $table->integer('tipo');
            $table->datetime('hora1');
            $table->datetime('hora2');
            $table->integer('maquina');
            $table->string('causas');
            $table->string('comentarios');
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
        //
    }
}
