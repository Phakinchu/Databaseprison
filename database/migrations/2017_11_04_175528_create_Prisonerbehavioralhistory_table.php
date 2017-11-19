<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrisonerbehavioralhistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Prisonerbehavioralhistory', function (Blueprint $table) {
            $table->integer('id_behav')->unsigned();
            $table->string('crime', 15);
            $table->string('guilt', 15);
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('id_prisoner')->unsigned();
            $table->integer('id_officer')->unsigned();
            $table->primary('id_behav') ;
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
        Schema::dropIfExists('Prisonerbehavioralhistory');
    }
}
