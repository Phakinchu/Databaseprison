<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrisonersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('prisoners', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('id_prisoner')->unsigned();
            $table->integer('id_cell')->unsigned();
            $table->string('fname', 15);
            $table->string('lname', 15);
            $table->string('address', 25);
            $table->date('dob');
            $table->char('gender', 1);
            $table->integer('scorepri');
            $table->integer('id_level')->unsigned();
            $table->primary('id_prisoner') ;
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
        Schema::dropIfExists('prisoners');
    }
}
