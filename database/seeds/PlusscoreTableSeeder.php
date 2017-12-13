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
            'id_activity' => '00001' ,
            'id_prisoner' => '00001'
        ]);

        DB::table('plusscore')->insert([
            'id_activity' => '00002' ,
            'id_prisoner' => '00002'
        ]);
    }
}
