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
            'id_level' => '1' ,
            'lv' => 1
        ]);

        DB::table('levels')->insert([
            'id_level' => '2' ,
            'lv' => 2
        ]);

        DB::table('levels')->insert([
            'id_level' => '3' ,
            'lv' => 3
        ]);

        DB::table('levels')->insert([
            'id_level' => '4' ,
            'lv' => 4
        ]);

        DB::table('levels')->insert([
            'id_level' => '5' ,
            'lv' => 5
        ]);

        DB::table('levels')->insert([
            'id_level' => '6' ,
            'lv' => 6
        ]);
    }
}
