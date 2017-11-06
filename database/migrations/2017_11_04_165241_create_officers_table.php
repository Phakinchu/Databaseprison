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
            $table->string('id_officer',5);
            $table->string('name', 15);
            $table->date('dob');
            $table->string('position', 15);
            $table->char('gender', 1);
            $table->string('id_jail',5);
            $table->primary('id_officer',5) ;
            $table->timestamps();
       //     $table->foreign('id_jail')->references('id_jail')->on('jails');
            
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
