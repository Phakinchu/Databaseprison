<?php

use Illuminate\Database\Seeder;

class PrisonersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prisoners')->insert([
            'id_prisoner' => '00001' ,
            'fname' => 'Yuthaponr',
            'lname' => 'Somchit' ,
            'address' => 'asd' ,
            'dob' => '1997-08-25' ,
            'gender' => 'M' ,
            'id_officer' => '00001' ,
            'id_level' => '00001'  ,
            'scorepri' => 20 

        ]);

        DB::table('prisoners')->insert([
            'id_prisoner' => '00002' ,
            'fname' => 'aaa' ,
            'lname' => 'bbb' ,
            'address' => 'asddd' ,
            'dob' => '1997-08-25' ,
            'gender' => 'M' ,
            'id_officer' => '00002' ,
            'id_level' => '00002'  ,
            'scorepri' => 25 

        ]);

        DB::table('prisoners')->insert([
            'id_prisoner' => '00003' ,
            'fname' => 'aghgfdaa' ,
            'lname' => 'bdfgfbb' ,
            'address' => 'kuy' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_officer' => '00002' ,
            'id_level' => '00002'  ,
            'scorepri' => 25 

        ]);

        DB::table('prisoners')->insert([
            'id_prisoner' => '00004' ,
            'fname' => 'aghgfdaa' ,
            'lname' => 'bdfgfbb' ,
            'address' => 'kuy' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_officer' => '00002' ,
            'id_level' => '00002'  ,
            'scorepri' => 25 

        ]);

    }
}
