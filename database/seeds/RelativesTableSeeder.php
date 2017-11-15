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
            'id_relative' => '00001' ,
            'name' => 'inwark' ,
            'contractdetail' => 'greafafv' ,
            'id_prisoner' => '00001'
        ]);

        DB::table('relatives')->insert([
            'id_relative' => '00002' ,
            'name' => 'inwrk' ,
            'contractdetail' => 'greafafav' ,
            'id_prisoner' => '00002'
        ]); 
    }
}
