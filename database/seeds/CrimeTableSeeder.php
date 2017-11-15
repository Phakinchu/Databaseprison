<?php

use Illuminate\Database\Seeder;

class CrimeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('crime')->insert([
            'id_prisoner' => '00001' ,
            'id_case' => '00001'
        ]);

        DB::table('crime')->insert([
            'id_prisoner' => '00002' ,
            'id_case' => '00002'
        ]);
    }
}
