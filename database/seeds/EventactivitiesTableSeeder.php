<?php

use Illuminate\Database\Seeder;

class EventactivitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('eventactivities')->insert([
            'id_activity' => 'A0001' ,
            'id_area' => 'AR001'
        ]);

        DB::table('eventactivities')->insert([
            'id_activity' => 'A0002' ,
            'id_area' => 'AR002'
        ]);
    }
}
