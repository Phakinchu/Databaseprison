<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('prisoners', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->foreign('id_officer')->references('id_officer')->on('officers');
            $table->foreign('id_level')->references('id_level')->on('levels');
        });

        Schema::table('officers', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->foreign('id_jail')->references('id_jail')->on('jails');
        });

        Schema::table('areas', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->foreign('id_jail')->references('id_jail')->on('jails');
        });

        Schema::table('cells', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->foreign('id_area')->references('id_area')->on('areas');
        });

        Schema::table('relatives', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->foreign('id_prisoner')->references('id_prisoner')->on('prisoners');  
        });

        Schema::table('freeprisonhistory', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->foreign('id_prisoner')->references('id_prisoner')->on('prisoners');
        });

        Schema::table('casedetails', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->foreign('id_officer')->references('id_officer')->on('officers'); 
        });

        Schema::table('prisonereducepunishmenthistory', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->foreign('id_prisoner')->references('id_prisoner')->on('prisoners');
        });

        Schema::table('visithistory', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->foreign('id_prisoner')->references('id_prisoner')->on('prisoners');
            $table->foreign('id_officer')->references('id_officer')->on('officers');
        });

        Schema::table('Prisonerbehavioralhistory', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->foreign('id_prisoner')->references('id_prisoner')->on('prisoners');
        });

        // Schema::table('eventactivities', function (Blueprint $table) {
        //     $table->engine = 'InnoDB';
        //     $table->foreign('id_activity')->references('id_activity')->on('activities');
        //     $table->foreign('id_area')->references('id_area')->on('areas');         
        // });

        // Schema::table('haverelative', function (Blueprint $table) {
        //     $table->engine = 'InnoDB';
        //     $table->foreign('id_relative')->references('id_relative')->on('relatives');
        //     $table->foreign('id_prisoner')->references('id_prisoner')->on('prisoners');          
        // });

        // Schema::table('crime', function (Blueprint $table) {
        //     $table->engine = 'InnoDB';
        //     $table->foreign('id_case')->references('id_case')->on('casedetails');
        //     $table->foreign('id_prisoner')->references('id_prisoner')->on('prisoners');        
        // });

        // Schema::table('managecase', function (Blueprint $table) {
        //     $table->engine = 'InnoDB';
        //     $table->foreign('id_case')->references('id_case')->on('casedetails');
        //     $table->foreign('id_officer')->references('id_officer')->on('officers');
        // });

        // Schema::table('plusscore', function (Blueprint $table) {
        //     $table->engine = 'InnoDB';
        //     $table->foreign('id_activity')->references('id_activity')->on('activities');
        //     $table->foreign('id_prisoner')->references('id_prisoner')->on('prisoners');
        // });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
