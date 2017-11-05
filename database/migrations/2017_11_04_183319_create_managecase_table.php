<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateManagecaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('managecase', function (Blueprint $table) {
            $table->integer('id_officer');
            $table->integer('id_case');
            $table->primary(['id_officer','id_case']) ;
         //   $table->foreign('id_case')->references('id_case')->on('casedetails');
        //    $table->foreign('id_officer')->references('id_officer')->on('officers');
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
        Schema::dropIfExists('managecase');
    }
}
