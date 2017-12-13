<?php

use Illuminate\Database\Seeder;

class HaverelativeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('haverelative')->insert([
            'id_relative' => '00001' ,
            'id_prisoner' => '00001'
        ]);

        DB::table('haverelative')->insert([
            'id_relative' => '00002' ,
            'id_prisoner' => '00002'
        ]);

        
    }
}
