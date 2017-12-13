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
            $table->foreign('id_level')->references('id_level')->on('levels')->onDelete('cascade');
            $table->foreign('id_cell')->references('id_cell')->on('cells')->onDelete('cascade');
        });

        Schema::table('officers', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->foreign('id_area')->references('id_area')->on('areas')->onDelete('cascade');
        });

        Schema::table('areas', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->foreign('id_jail')->references('id_jail')->on('jails')->onDelete('cascade');
        });

        Schema::table('cells', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->foreign('id_area')->references('id_area')->on('areas')->onDelete('cascade');
        });

        Schema::table('relatives', function (Blueprint $table) {
            $table->engine = 'InnoDB';
        });

        Schema::table('freeprisonhistory', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->foreign('id_prisoner')->references('id_prisoner')->on('prisoners')->onDelete('cascade');
        });

        Schema::table('casedetails', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->foreign('id_prisoner')->references('id_prisoner')->on('prisoners')->onDelete('cascade'); 
        });

        Schema::table('prisonereducepunishmenthistory', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->foreign('id_prisoner')->references('id_prisoner')->on('prisoners')->onDelete('cascade');
        });

        Schema::table('visithistory', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->foreign('id_prisoner')->references('id_prisoner')->on('prisoners')->onDelete('cascade');
            $table->foreign('id_officer')->references('id_officer')->on('officers')->onDelete('cascade');
        });

        Schema::table('Prisonerbehavioralhistory', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->foreign('id_prisoner')->references('id_prisoner')->on('prisoners')->onDelete('cascade');
            $table->foreign('id_officer')->references('id_officer')->on('officers')->onDelete('cascade'); 
        });

        Schema::table('prisoner_officer', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->foreign('id_prisoner')->references('id_prisoner')->on('prisoners')->onDelete('cascade');
            $table->foreign('id_officer')->references('id_officer')->on('officers')->onDelete('cascade'); 
        });

        Schema::table('haverelative', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->foreign('id_relative')->references('id_relative')->on('relatives')->onDelete('cascade');
            $table->foreign('id_prisoner')->references('id_prisoner')->on('prisoners')->onDelete('cascade');          
        });

        Schema::table('managecase', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->foreign('id_case')->references('id_case')->on('casedetails')->onDelete('cascade');
            $table->foreign('id_officer')->references('id_officer')->on('officers')->onDelete('cascade');
        });

        Schema::table('eventactivities', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->foreign('id_activity')->references('id_activity')->on('activities')->onDelete('cascade');
            $table->foreign('id_area')->references('id_area')->on('areas')->onDelete('cascade');         
        });

        Schema::table('plusscore', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->foreign('id_activity')->references('id_activity')->on('activities')->onDelete('cascade');
            $table->foreign('id_prisoner')->references('id_prisoner')->on('prisoners')->onDelete('cascade');
        });

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
