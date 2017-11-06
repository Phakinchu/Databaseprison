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
            $table->string('id_reducehis',5);
            $table->string('cause_reduce', 20);
            $table->integer('time_reducted');
            $table->date('start_datereduce');
            $table->string('id_prisoner',5);
            $table->primary('id_reducehis') ;
            $table->timestamps();
    //        $table->foreign('id_prisoner')->references('id_prisoner')->on('prisoners');
            
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
