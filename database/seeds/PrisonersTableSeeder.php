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
            'id_prison' => 'P0001'
            'fname' => 'Yuthapong'
            'lname' => 'Somchit'
            'address' => 'asd'
            'dob' => '1997-08-25'
            'gender' => 'M'
            'id_officer' => 'O0001'
            'id_level' => 'L0001'

        ]);

        DB::table('prisoners')->insert([
            'id_prison' => 'P0002'
            'fname' => 'aaa'
            'lname' => 'bbb'
            'address' => 'asddd'
            'dob' => '1997-08-25'
            'gender' => 'M'
            'id_officer' => 'O0002'
            'id_level' => 'L0002'

        ]);
    }
}
