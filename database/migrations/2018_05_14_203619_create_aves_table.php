<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAvesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aves', function (Blueprint $table) {
            $table->increments('id_ave');
            $table->timestamps();
            $table->dateTimeTz('fecha_ingreso');
            $table->dateTimeTz('fecha_baja')->nullable($value = true);
            $table->string('obs_inicial');
            $table->decimal('peso', 8, 2);
            $table->integer('edad');
            $table->string('sexaje', 1);
            //raza
            //galpon
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aves');
    }
}
