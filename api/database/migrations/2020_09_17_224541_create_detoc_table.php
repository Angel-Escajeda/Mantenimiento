<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetOcTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detoc', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_oc');
            $table->integer('id_prod');
            $table->integer('cantidad');
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
        Schema::dropIfExists('detoc');
    }
}
