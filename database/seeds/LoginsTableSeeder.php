<?php

use Illuminate\Database\Seeder;

class LoginsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('logins')->insert([
            'id_login' => '00001' ,
            'name' => 'Yasda',
            'pass' => 'Somchit' ,
            'status' => 'admin' 
        ]);

        DB::table('logins')->insert([
            'id_login' => '00002' ,
            'name' => 'asd',
            'pass' => 'aaa' ,
            'status' => 'visitor' 
        ]);
    }
}
