<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlusscoreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plusscore', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('id_activity')->unsigned();
            $table->integer('id_prisoner')->unsigned();
           // $table->primary(['id_activity','id_prisoner']) ;
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
        Schema::dropIfExists('plusscore');
    }
}
