<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLineaGensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('linea_gens', function (Blueprint $table) {
            $table->increments('id_linea_gen');
            $table->timestamps();
            $table->string('nombre');
            $table->string('observacion');
            //la foranea del tipo de ave
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('linea_gens');
    }
}
