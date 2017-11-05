<?php

use Illuminate\Database\Seeder;

class RelativesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('relatives')->insert([
            'id_relative' => 'R0001'
            'name' => 'inwark'
            'contractdetail' => 'greafafv'
            'id_prisoner' => 'P0001'
        ]);

        DB::table('relatives')->insert([
            'id_relative' => 'R0002'
            'name' => 'inwrk'
            'contractdetail' => 'greafafav'
            'id_prisoner' => 'P0002'
        ]); 
    }
}
