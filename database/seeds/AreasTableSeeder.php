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
            'level_area' => 1 ,
            'id_jail' => '00001'
        ]);

        DB::table('areas')->insert([
            'id_area' => '00002' ,
            'level_area' => 2 ,
            'id_jail' => '00001'
        ]);
        
        DB::table('areas')->insert([
            'id_area' => '00003' ,
            'level_area' => 3 ,
            'id_jail' => '00001'
        ]);
        
        DB::table('areas')->insert([
            'id_area' => '00004' ,
            'level_area' => 4 ,
            'id_jail' => '00001'
        ]);
        
        DB::table('areas')->insert([
            'id_area' => '00005' ,
            'level_area' => 5 ,
            'id_jail' => '00001'
        ]);
        
        DB::table('areas')->insert([
            'id_area' => '00006' ,
            'level_area' => 6 ,
            'id_jail' => '00001'
        ]);
        
    }
}
