<?php

use Illuminate\Database\Seeder;

class ActivitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('activities')->insert([
            'id_activity' => '1' ,
            'activity' => 'clean' ,
            'act_duration' => 1
        ]);

        DB::table('activities')->insert([
            'id_activity' => '2' ,
            'activity' => 'outreach' ,
            'act_duration' => 2
        ]);
    }
}
