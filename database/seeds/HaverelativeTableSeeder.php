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
            'id_relative' => 'R0001'
            'id_prisoner' => 'P0001'
        ]);

        DB::table('haverelative')->insert([
            'id_relative' => 'R0002'
            'id_prisoner' => 'P0002'
        ]);
    }
}
