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
            'id_freeprison' => 'F0010' ,
            'freedate' => '1997-08-25' ,
            'fname' => 'aaaasss' ,
            'lname' => 'sssss' ,
            'type_of_freedom' => 'die' ,
            'id_prisoner' => 'P0010'
        ]); 

        DB::table('freeprisonhistory')->insert([
            'id_freeprison' => 'F0011' ,
            'freedate' => '1997-08-15' ,
            'fname' => 'adsssss' ,
            'lname' => 'ssssaas' ,
            'type_of_freedom' => 'eiei' ,
            'id_prisoner' => 'P0011'
        ]);
    }
}
