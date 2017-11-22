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
            'id_area' => '00001' ,
            'level_area' => 3 ,
            'id_jail' => '00001'
         

        ]);

    }
}
