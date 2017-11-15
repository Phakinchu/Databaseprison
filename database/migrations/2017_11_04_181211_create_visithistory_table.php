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
            $table->engine = 'InnoDB';
            $table->integer('id_visit')->unsigned();
            $table->string('name', 15);
            $table->string('item', 20);
            $table->string('contract_detail', 25);
            $table->dateTime('Datetime');
            $table->integer('id_prisoner')->unsigned();
            $table->integer('id_officer')->unsigned();
            $table->primary('id_visit') ;
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
