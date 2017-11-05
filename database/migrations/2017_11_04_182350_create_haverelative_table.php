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
            $table->integer('id_relative');
            $table->integer('id_prisoner');
            $table->primary(['id_relative','id_prisoner']) ;
        //    $table->foreign('id_relative')->references('id_relative')->on('relatives');
     //       $table->foreign('id_prisoner')->references('id_prisoner')->on('prisoners');
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
