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
            'id_behav' => 'B0001' ,
            'crime' => 'atk' ,
            'guilt' => 'lock' ,
            'start_date' => '1997-08-25' ,
            'end_date' => '1997-08-28' ,
            'id_prisoner' => 'P0001'
        ]);

        DB::table('prisonerbehavioralhistory')->insert([
            'id_behav' => 'B0002' ,
            'crime' => 'atk' ,
            'guilt' => 'lock' ,
            'start_date' => '1997-08-25' ,
            'end_date' => '1997-08-28' ,
            'id_prisoner' => 'P0002'
        ]);
    }
}
