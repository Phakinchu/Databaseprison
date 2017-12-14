<?php

use Illuminate\Database\Seeder;

class PrisonerOfficerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prisoner_officer')->insert([
            'id_prisoner' => '00001' ,
            'id_officer' => '00001'
        ]);

        DB::table('prisoner_officer')->insert([
            'id_prisoner' => '00002' ,
            'id_officer' => '00002'
        ]);
    }
}
