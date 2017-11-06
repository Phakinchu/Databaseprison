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
            'id_visit' => 'V0001' ,
            'name' => 'Y' ,
            'item' => 'box' ,
            'contract_detail' => 'aasdadsd' ,
            'Datetime' => '1997-08-25' ,
            'id_prisoner' => 'P0001' ,
            'id_officer' => 'O0003'
        ]);

        DB::table('visithistory')->insert([
            'id_visit' => 'V0002' ,
            'name' => 'uY' ,
            'item' => 'boux' ,
            'contract_detail' => 'aasdadsd' ,
            'Datetime' => '1997-08-25' ,
            'id_prisoner' => 'P0002' ,
            'id_officer' => 'O0004'
        ]);
    }
}
