<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlusscoreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plusscore', function (Blueprint $table) {
            $table->integer('id_activity');
            $table->integer('id_prisoner');
            $table->primary(['id_activity','id_prisoner']) ;
        //    $table->foreign('id_activity')->references('id_activity')->on('activities');
        //    $table->foreign('id_prisoner')->references('id_prisoner')->on('prisoners');
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
        Schema::dropIfExists('plusscore');
    }
}
