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
            $table->string('id_behav',5);
            $table->string('crime', 15);
            $table->string('guilt', 15);
            $table->date('start_date');
            $table->date('end_date');
            $table->string('id_prisoner',5);
            $table->primary('id_behav') ;
        //    $table->foreign('id_prisoner')->references('id_prisoner')->on('prisoners');
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
