<?php

use Illuminate\Database\Seeder;

class JailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jails')->insert([
            'id_jail' => 'J0001'
          
        ]);

        DB::table('jails')->insert([
            'id_jail' => 'J0002'
          
        ]);
    }
}
