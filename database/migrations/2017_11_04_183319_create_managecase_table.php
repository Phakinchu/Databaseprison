<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateManagecaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('managecase', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('id_officer')->unsigned();
            $table->integer('id_case')->unsigned();
         //  $table->primary(['id_officer','id_case']) ;
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
        Schema::dropIfExists('managecase');
    }
}
