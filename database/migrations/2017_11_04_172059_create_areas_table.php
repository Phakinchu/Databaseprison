<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAreasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('areas', function (Blueprint $table) {
            $table->string('id_area',5);
            $table->integer('level_area');
            $table->integer('numbers_of_prisoner');
            $table->integer('numbers_of_officer');
            $table->integer('id_jail');
            $table->primary('id_area') ;
            $table->foreign('id_jail')->references('id_jail')->on('jails');
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
        Schema::dropIfExists('areas');
    }
}
