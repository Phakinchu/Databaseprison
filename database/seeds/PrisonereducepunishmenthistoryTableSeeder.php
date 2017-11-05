<?php

use Illuminate\Database\Seeder;

class PrisonereducepunishmenthistoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prisonereducepunishmenthistory')->insert([
            'id_reducehis' => 'RE001'
            'cause_reduce' => 'kondee'
            'time_reducted' => '5'
            'start_datereduce' => '1997-08-30'
            'id_prisoner' => 'P0001'
        ]);

        DB::table('prisonereducepunishmenthistory')->insert([
            'id_reducehis' => 'RE002'
            'cause_reduce' => 'kondee22'
            'time_reducted' => '4'
            'start_datereduce' => '1997-08-29'
            'id_prisoner' => 'P0002'
        ]);
    }
}
