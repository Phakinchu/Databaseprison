<?php

use Illuminate\Database\Seeder;

class OfficersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('officers')->insert([
            'id_officer' => '00001'  ,
            'name' => 'Yuth' ,
            'dob' => '1997-08-05' ,
            'position' => 'pro' ,
            'gender' => 'M' ,
            'id_area' => '00001'
        ]);

        DB::table('officers')->insert([
            'id_officer' => '00002' ,
            'name' => 'Yuth2' ,
            'dob' => '1997-08-04' ,
            'position' => 'pro2' ,
            'gender' => 'M' ,
            'id_area' => '00001'
        ]); 

        DB::table('officers')->insert([
            'id_officer' => '00003' ,
            'name' => 'g' ,
            'dob' => '1997-08-04' ,
            'position' => 'pro2' ,
            'gender' => 'M' ,
            'id_area' => '00001'
        ]); 

        DB::table('officers')->insert([
            'id_officer' => '00004' ,
            'name' => 'g' ,
            'dob' => '1997-08-04' ,
            'position' => 'pro2' ,
            'gender' => 'M' ,
            'id_area' => '00001'
        ]); 

        DB::table('officers')->insert([
            'id_officer' => '00005' ,
            'name' => 'gaa' ,
            'dob' => '1997-08-04' ,
            'position' => 'prjj' ,
            'gender' => 'M' ,
            'id_area' => '00002'
        ]); 

        DB::table('officers')->insert([
            'id_officer' => '00006' ,
            'name' => 'aag' ,
            'dob' => '1997-08-04' ,
            'position' => 'prjj' ,
            'gender' => 'M' ,
            'id_area' => '00002' 
        ]); 
    }
}
