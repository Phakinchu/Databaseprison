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
            'id_case' => '1' ,
            'case_section' => 'one' ,
            'punishment' => 'lock' ,
            'case_duration' => 15 ,
            'id_prisoner' => '2'
        ]);

        DB::table('casedetails')->insert([
            'id_case' => '2' ,
            'case_section' => 'o2ne' ,
            'punishment' => 'locked' ,
            'case_duration' => 10 ,
            'id_prisoner' => '2'
        ]);

        DB::table('casedetails')->insert([
            'id_case' => '3' ,
            'case_section' => 'sdsd' ,
            'punishment' => 'locked' ,
            'case_duration' => 5 ,
            'id_prisoner' => '1'
        ]);

    }
}
