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
        Schema::create('prisonerbehavioralhistory', function (Blueprint $table) {
            $table->increments('id_behav');
            $table->string('crime', 15);
            $table->string('gulit', 15);
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('id_prisoner');
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
        Schema::dropIfExists('prisonerbehavioralhistory');
    }
}
