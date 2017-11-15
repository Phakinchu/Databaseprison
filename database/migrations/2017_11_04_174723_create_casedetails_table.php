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
            $table->engine = 'InnoDB';
            $table->integer('id_case')->unsigned();
            $table->string('case_section', 15);
            $table->string('punishment', 15);
            $table->integer('case_duration');
            $table->integer('id_officer')->unsigned();
            $table->primary('id_case') ;
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
