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
            'id_activity' => '00001' ,
            'id_area' => '00001'
        ]);

        DB::table('eventactivities')->insert([
            'id_activity' => '00002' ,
            'id_area' => '00002'
        ]);
    }
}
