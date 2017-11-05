<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFreeprisonhistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('freeprisonhistory', function (Blueprint $table) {
            $table->string('id_freeprison',5);
            $table->date('freedate');
            $table->string('fname', 15);
            $table->string('lname', 15);
            $table->string('type_of_freedom', 20);
            $table->string('id_prisoner',5);
            $table->primary('id_freeprison') ;
         //   $table->foreign('id_prisoner')->references('id_prisoner')->on('prisoners');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('freeprisonhistory');
    }
}
