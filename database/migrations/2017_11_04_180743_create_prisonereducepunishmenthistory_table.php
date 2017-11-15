<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrisonereducepunishmenthistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prisonereducepunishmenthistory', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('id_reducehis')->unsigned();
            $table->string('cause_reduce', 20);
            $table->integer('time_reducted');
            $table->date('start_datereduce');
            $table->integer('id_prisoner')->unsigned();
            $table->primary('id_reducehis') ;
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
        Schema::dropIfExists('prisonereducepunishmenthistory');
    }
}
