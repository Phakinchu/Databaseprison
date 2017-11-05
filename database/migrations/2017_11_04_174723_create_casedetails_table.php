<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCasedetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('casedetails', function (Blueprint $table) {
            $table->string('id_case',5);
            $table->string('case_section', 15);
            $table->string('punishment', 15);
            $table->integer('case_duration');
            $table->integer('id_officer');
            $table->primary('id_case') ;
         //   $table->foreign('id_officer')->references('id_officer')->on('officers');
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
        Schema::dropIfExists('casedetails');
    }
}
