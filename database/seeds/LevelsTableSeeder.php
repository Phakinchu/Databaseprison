<?php

use Illuminate\Database\Seeder;

class LevelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('levels')->insert([
            'id_level' => 'L0001' ,
            'score' => 80 ,
            'lv' => 1
      
        ]);

        DB::table('levels')->insert([
            'id_level' => 'L0002' ,
            'score' => 80 ,
            'lv' => 2
      
        ]);
    }
}
