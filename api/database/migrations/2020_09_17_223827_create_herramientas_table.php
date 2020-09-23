<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHerramientasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('herramientas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('numserie',50);
            $table->string('codigo',50);
            $table->integer('estado');
            $table->integer('id_prov');
            $table->integer('tipo');
            $table->string('ubicacion',20);
            $table->integer('estatus')->default(1); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('herramientas');
    }
}
