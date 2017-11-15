<?php

use Illuminate\Database\Seeder;

class CellsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cells')->insert([
            'id_cell' => '00001' ,
            'id_area' => '00001'
        ]);

        DB::table('cells')->insert([
            'id_cell' => '00002' ,
            'id_area' => '00002'
        ]);
    }
}
