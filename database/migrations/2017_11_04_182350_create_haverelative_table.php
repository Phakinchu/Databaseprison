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
            $table->string('id_relative',5);
            $table->string('id_prisoner',5);
            $table->primary(['id_relative','id_prisoner']) ;
        //    $table->foreign('id_relative')->references('id_relative')->on('relatives');
     //       $table->foreign('id_prisoner')->references('id_prisoner')->on('prisoners');
            
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
