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
            $table->string('id_activity',5);
            $table->string('id_area',5);
            $table->primary(['id_activity','id_area']) ;
            $table->timestamps();
       //     $table->foreign('id_activity')->references('id_activity')->on('activities');
         //   $table->foreign('id_area')->references('id_area')->on('areas');
            
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
