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
            $table->engine = 'InnoDB';
            $table->integer('id_freeprison')->unsigned();
            $table->date('freedate');
            $table->string('fname', 15);
            $table->string('lname', 15);
            $table->string('type_of_freedom', 20);
            $table->integer('id_prisoner')->unsigned();
            $table->primary('id_freeprison') ;
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
        Schema::dropIfExists('freeprisonhistory');
    }
}
