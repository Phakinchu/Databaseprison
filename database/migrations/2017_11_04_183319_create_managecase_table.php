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
            $table->string('id_officer',5);
            $table->string('id_case',5);
            $table->primary(['id_officer','id_case']) ;
            $table->timestamps();
         //   $table->foreign('id_case')->references('id_case')->on('casedetails');
        //    $table->foreign('id_officer')->references('id_officer')->on('officers');
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
