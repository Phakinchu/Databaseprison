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
            'id_prisoner' => 'P0001' ,
            'id_case' => 'C0001'
        ]);

        DB::table('crime')->insert([
            'id_prisoner' => 'P0002' ,
            'id_case' => 'C0002'
        ]);
    }
}
