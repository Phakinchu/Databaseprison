<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfficersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('officers', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('id_officer')->unsigned();
            $table->string('name', 15);
            $table->date('dob');
            $table->string('position', 15);
            $table->char('gender', 1);
            $table->integer('id_area')->unsigned();
            $table->primary('id_officer') ;
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
        Schema::dropIfExists('officers');
    }
}
