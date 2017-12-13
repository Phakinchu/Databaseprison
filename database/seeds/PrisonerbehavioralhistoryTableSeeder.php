<?php

use Illuminate\Database\Seeder;

class PrisonerbehavioralhistoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prisonerbehavioralhistory')->insert([
            'id_behav' => '00001' ,
            'crime' => 'Wrangle' ,
            'guilt' => 'lock' ,
            'start_date' => '1997-08-25' ,
            'end_date' => '1997-08-28' ,
            'id_prisoner' => '00005',
            'id_officer' => '0002'
        ]);

        DB::table('prisonerbehavioralhistory')->insert([
            'id_behav' => '00002' ,
            'crime' => 'Wrangle' ,
            'guilt' => 'lock' ,
            'start_date' => '1997-08-25' ,
            'end_date' => '1997-08-28' ,
            'id_prisoner' => '00010',
            'id_officer' => '0002'
        ]);
    }
}
