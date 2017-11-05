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
            'id_officer' => 'O0001'
            'name' => 'Yuth'
            'dob' => '1997-08-05'
            'position' => 'pro'
            'address' => 'asdaa'
            'gender' => 'M'
            'id_jail' => 'J0001'
        ]);

        DB::table('officers')->insert([
            'id_officer' => 'O0002'
            'name' => 'Yuth2'
            'dob' => '1997-08-04'
            'position' => 'pro2'
            'address' => 'a'
            'gender' => 'M'
            'id_jail' => 'J0001'
        ]); 

        DB::table('officers')->insert([
            'id_officer' => 'O0003'
            'name' => 'g'
            'dob' => '1997-08-04'
            'position' => 'pro2'
            'address' => 'a'
            'gender' => 'M'
            'id_jail' => 'J0001'
        ]); 

        DB::table('officers')->insert([
            'id_officer' => 'O0004'
            'name' => 'g'
            'dob' => '1997-08-04'
            'position' => 'pro2'
            'address' => 'a'
            'gender' => 'M'
            'id_jail' => 'J0001'
        ]); 

        DB::table('officers')->insert([
            'id_officer' => 'O0005'
            'name' => 'gaa'
            'dob' => '1997-08-04'
            'position' => 'prjj'
            'address' => 'ad'
            'gender' => 'dM'
            'id_jail' => 'J0002'
        ]); 

        DB::table('officers')->insert([
            'id_officer' => 'O0006'
            'name' => 'aag'
            'dob' => '1997-08-04'
            'position' => 'prjj'
            'address' => 'aj'
            'gender' => 'jjM'
            'id_jail' => 'J0002'
        ]); 
    }
}
