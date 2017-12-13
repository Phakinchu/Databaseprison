<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoginsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('logins', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('id_login');
            $table->string('name', 15);
            $table->string('pass', 15);
            $table->string('status', 15);
            $table->primary('id_login') ;
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
        Schema::dropIfExists('logins');
    }
}
