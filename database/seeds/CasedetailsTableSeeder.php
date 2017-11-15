<?php

use Illuminate\Database\Seeder;

class CasedetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('casedetails')->insert([
            'id_case' => '00001' ,
            'case_section' => 'one' ,
            'punishment' => 'lock' ,
            'case_duration' => 15 ,
            'id_officer' => '00001'
        ]);

        DB::table('casedetails')->insert([
            'id_case' => '00002' ,
            'case_section' => 'o2ne' ,
            'punishment' => 'locked' ,
            'case_duration' => 10 ,
            'id_officer' => '00003'
        ]);
    }
}
