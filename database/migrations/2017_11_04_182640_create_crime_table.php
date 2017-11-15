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
            $table->engine = 'InnoDB';
           // $table->engine = 'InnoDB';
            $table->integer('id_prisoner')->unsigned();
            $table->integer('id_case')->unsigned();
          //  $table->primary(['id_prisoner','id_case']) ;
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
