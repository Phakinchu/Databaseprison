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
        DB::table('lecturers')->insert([
            'id_prison' => 'P0001'
            'fname' => 'Yuthapong'
            'lname' => 'Somchit'
            'address' => 'Somchit'
            'dob' => '1997-08-25'
            'gender' => 'M'
            'id_officer' => 'O0001'
            'id_level' => 'L0001'

        ]);

        DB::table('lecturers')->insert([
            'id_prison' => 'P0001'
            'fname' => 'Yuthapong'
            'lname' => 'Somchit'
            'address' => 'Somchit'
            'dob' => '1997-08-25'
            'gender' => 'M'
            'id_officer' => 'O0001'
            'id_level' => 'L0001'

        ]);
    }
}
