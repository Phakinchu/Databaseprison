<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHaverelativeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('haverelative', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            //$table->engine = 'InnoDB';
            $table->integer('id_relative')->unsigned();
            $table->integer('id_prisoner')->unsigned();
          //  $table->primary(['id_relative','id_prisoner']) ;
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
        Schema::dropIfExists('haverelative');
    }
}
