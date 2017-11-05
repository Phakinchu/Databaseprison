<?php

use Illuminate\Database\Seeder;

class AreasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('areas')->insert([
            'id_area' => 'AR001'
            'level_area' => '5'
            'numbers_of_prisoner' => '50'
            'numbers_of_officer' => '55'
            'id_jail' => 'J0001'
         

        ]);

        DB::table('areas')->insert([
            'id_area' => 'AR002'
            'level_area' => '2'
            'numbers_of_prisoner' => '40'
            'numbers_of_officer' => '54'
            'id_jail' => 'J0002'
         

        ]);
    }
}
