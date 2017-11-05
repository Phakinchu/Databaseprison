<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCrimeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crime', function (Blueprint $table) {
            $table->integer('id_prisoner');
            $table->integer('id_case');
            $table->primary(['id_prisoner','id_case']) ;
            $table->foreign('id_case')->references('id_case')->on('casedetails');
            $table->foreign('id_prisoner')->references('id_prisoner')->on('prisoners');
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
        Schema::dropIfExists('crime');
    }
}
