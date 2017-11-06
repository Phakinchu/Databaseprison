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
            $table->string('id_activity',5);
            $table->string('id_prisoner',5);
            $table->primary(['id_activity','id_prisoner']) ;
            $table->timestamps();
        //    $table->foreign('id_activity')->references('id_activity')->on('activities');
        //    $table->foreign('id_prisoner')->references('id_prisoner')->on('prisoners');
            
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
