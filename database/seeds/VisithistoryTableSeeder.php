<?php

use Illuminate\Database\Seeder;

class VisithistoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('visithistory')->insert([
            'id_visit' => '00001' ,
            'name' => 'Y' ,
            'item' => 'box' ,
            'contract_detail' => 'aasdadsd' ,
            'Datetime' => '1997-08-25' ,
            'id_prisoner' => '00001' ,
            'id_officer' => '00003'
        ]);

        DB::table('visithistory')->insert([
            'id_visit' => '00002' ,
            'name' => 'uY' ,
            'item' => 'boux' ,
            'contract_detail' => 'aasdadsd' ,
            'Datetime' => '1997-08-25' ,
            'id_prisoner' => '00002' ,
            'id_officer' => '00004'
        ]);
    }
}
