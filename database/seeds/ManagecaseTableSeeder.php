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
            'id_officer' => 'O0005' ,
            'id_case' => 'C0001'
        ]);

        DB::table('managecase')->insert([
            'id_officer' => 'O0006' ,
            'id_case' => 'C0002'
        ]);

    }
}
