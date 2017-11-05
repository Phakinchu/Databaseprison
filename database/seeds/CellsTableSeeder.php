<?php

use Illuminate\Database\Seeder;

class CellsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cell')->insert([
            'id_cell' => 'C0001'
            'id_area' => 'A0001'
        ]);

        DB::table('cell')->insert([
            'id_cell' => 'C0002'
            'id_area' => 'A0002'
        ]);
    }
}
