<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisithistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visithistory', function (Blueprint $table) {
            $table->string('id_visit',5);
            $table->string('name', 15);
            $table->string('item', 20);
            $table->string('contract_detail', 25);
            $table->dateTime('Datetime');
            $table->integer('id_prisoner');
            $table->integer('id_officer');
            $table->primary('id_visit') ;
            $table->foreign('id_prisoner')->references('id_prisoner')->on('prisoners');
            $table->foreign('id_officer')->references('id_officer')->on('officers');
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
        Schema::dropIfExists('visithistory');
    }
}
