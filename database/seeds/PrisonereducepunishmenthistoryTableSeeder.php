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
            'id_reducehis' => '00001' ,
            'cause_reduce' => 'kondee' ,
            'time_reducted' => 5 ,
            'start_datereduce' => '1997-08-30' ,
            'id_prisoner' => '00001'
        ]);

        DB::table('prisonereducepunishmenthistory')->insert([
            'id_reducehis' => '00002' ,
            'cause_reduce' => 'kondee22' ,
            'time_reducted' => 4 ,
            'start_datereduce' => '1997-08-29' ,
            'id_prisoner' => '00002' 
        ]);
    }
}
