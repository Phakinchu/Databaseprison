<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrisonerOfficerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prisoner_officer', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('id_prisoner')->unsigned();
            $table->integer('id_officer')->unsigned();
            //$table->primary(['id_prisoner','id_officer']) ;
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
        Schema::dropIfExists('prioner_officer');
    }
}
