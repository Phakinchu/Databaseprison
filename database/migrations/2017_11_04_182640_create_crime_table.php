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
            $table->string('id_prisoner',5);
            $table->string('id_case',5);
            $table->primary(['id_prisoner','id_case']) ;
        //    $table->foreign('id_case')->references('id_case')->on('casedetails');
       //     $table->foreign('id_prisoner')->references('id_prisoner')->on('prisoners');
            
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
