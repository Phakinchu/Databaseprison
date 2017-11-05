<?php

use Illuminate\Database\Seeder;

class PlusscoreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('plusscore')->insert([
            'id_activity' => 'A0001' ,
            'id_prisoner' => 'P0001'
        ]);

        DB::table('plusscore')->insert([
            'id_activity' => 'A0002' ,
            'id_prisoner' => 'P0002'
        ]);
    }
}
