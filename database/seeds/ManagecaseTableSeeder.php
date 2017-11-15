<?php

use Illuminate\Database\Seeder;

class ManagecaseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('managecase')->insert([
            'id_officer' => '00005' ,
            'id_case' => '00001'
        ]);

        DB::table('managecase')->insert([
            'id_officer' => '00006' ,
            'id_case' => '00002'
        ]);

    }
}
