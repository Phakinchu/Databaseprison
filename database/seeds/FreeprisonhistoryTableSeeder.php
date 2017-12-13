<?php

use Illuminate\Database\Seeder;

class FreeprisonhistoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('freeprisonhistory')->insert([
            'id_freeprison' => '00010' ,
            'freedate' => '1997-08-25' ,
            'type_of_freedom' => 'died' ,
            'id_prisoner' => '00020'
        ]); 

        DB::table('freeprisonhistory')->insert([
            'id_freeprison' => '00011' ,
            'freedate' => '1997-09-09' ,
            'type_of_freedom' => 'died' ,
            'id_prisoner' => '00025'
        ]);
    }
}
