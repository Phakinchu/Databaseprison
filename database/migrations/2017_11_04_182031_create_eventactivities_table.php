<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventactivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventactivities', function (Blueprint $table) {
            $table->integer('id_activity');
            $table->integer('id_area');
            $table->primary(['id_activity','id_area']) ;
            $table->foreign('id_activity')->references('id_activity')->on('activities');
            $table->foreign('id_area')->references('id_area')->on('areas');
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
        Schema::dropIfExists('eventactivities');
    }
}
