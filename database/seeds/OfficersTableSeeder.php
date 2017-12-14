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
        // 1 area 1
        DB::table('officers')->insert([
            'id_officer' => '00001'  ,
            'name' => 'Aaron Turner' ,
            'dob' => '1993-06-21' ,
            'position' => 'Correctional officer' ,
            'gender' => 'M' ,
            'id_area' => '1'
        ]);

        DB::table('officers')->insert([
            'id_officer' => '00002' ,
            'name' => 'Abraham Davis' ,
            'dob' => '1988-04-02' ,
            'position' => 'Correctional Officer' ,
            'gender' => 'M' ,
            'id_area' => '1'
        ]);

        DB::table('officers')->insert([
            'id_officer' => '00003' ,
            'name' => 'Abdul Sriraja' ,
            'dob' => '1984-03-14' ,
            'position' => 'Chief Officer' ,
            'gender' => 'M' ,
            'id_area' => '1'
        ]);

        // 5
        DB::table('officers')->insert([
            'id_officer' => '00004' ,
            'name' => 'Adam Miller' ,
            'dob' => '1994-08-04' ,
            'position' => 'Correctional Officer' ,
            'gender' => 'M' ,
            'id_area' => '1'
        ]);

        // 1
        DB::table('officers')->insert([
            'id_officer' => '00005'  ,
            'name' => 'Adrian Walker' ,
            'dob' => '1977-02-05' ,
            'position' => 'Associate Director' ,
            'gender' => 'M' ,
            'id_area' => '1'
        ]);

        DB::table('officers')->insert([
            'id_officer' => '00006' ,
            'name' => 'Allen Wright' ,
            'dob' => '1987-12-30' ,
            'position' => 'Correctional Officer' ,
            'gender' => 'M' ,
            'id_area' => '1'
        ]);

        DB::table('officers')->insert([
            'id_officer' => '00007' ,
            'name' => 'Jared Leto' ,
            'dob' => '1987-01-29' ,
            'position' => 'Correctional Officer' ,
            'gender' => 'M' ,
            'id_area' => '1'
        ]);

        // 5
        DB::table('officers')->insert([
            'id_officer' => '00008' ,
            'name' => 'Kenneth Cosh' ,
            'dob' => '1969-07-18' ,
            'position' => 'Director' ,
            'gender' => 'M' ,
            'id_area' => '1'
        ]);
        // 1
        DB::table('officers')->insert([
            'id_officer' => '00009'  ,
            'name' => 'Ada Wong' ,
            'dob' => '1986-04-01' ,
            'position' => 'Correctional Officer' ,
            'gender' => 'F' ,
            'id_area' => '1'
        ]);

        DB::table('officers')->insert([
            'id_officer' => '00010' ,
            'name' => 'Adeline Owen' ,
            'dob' => '1983-01-04' ,
            'position' => 'Correctional Officer' ,
            'gender' => 'F' ,
            'id_area' => '1'
        ]);

        DB::table('officers')->insert([
            'id_officer' => '00011' ,
            'name' => 'Anita Lewis' ,
            'dob' => '1991-02-15' ,
            'position' => 'Correctional Officer' ,
            'gender' => 'F' ,
            'id_area' => '1'
        ]);

        // 12 area 1
        DB::table('officers')->insert([
            'id_officer' => '00012' ,
            'name' => 'Constance Young' ,
            'dob' => '1988-07-14' ,
            'position' => 'Correctional Officer' ,
            'gender' => 'F' ,
            'id_area' => '1'
        ]);
        DB::table('officers')->insert([
            'id_officer' => '00013' ,
            'name' => 'Doris Arryn' ,
            'dob' => '1989-11-09' ,
            'position' => 'Correctional Officer' ,
            'gender' => 'F' ,
            'id_area' => '1'
        ]);
        DB::table('officers')->insert([
            'id_officer' => '00014' ,
            'name' => 'Eve ' ,
            'dob' => '1980-06-18' ,
            'position' => 'Correctional Officer' ,
            'gender' => 'F' ,
            'id_area' => '1'
        ]);
        // 15 area 1
        DB::table('officers')->insert([
            'id_officer' => '00015' ,
            'name' => 'Helen' ,
            'dob' => '1994-02-26' ,
            'position' => 'Correctional Officer' ,
            'gender' => 'F' ,
            'id_area' => '1'
        ]);


        // 1 area 2
       DB::table('officers')->insert([
        'id_officer' => '00016'  ,
        'name' => 'Aiden Pearce' ,
        'dob' => '1986-01-29' ,
        'position' => 'Correctional Officer' ,
        'gender' => 'M' ,
        'id_area' => '2'
    ]);

    DB::table('officers')->insert([
        'id_officer' => '00017' ,
        'name' => 'Blake Langerman' ,
        'dob' => '1997-08-04' ,
        'position' => 'Correctional Officer' ,
        'gender' => 'M' ,
        'id_area' => '2'
    ]);

    DB::table('officers')->insert([
        'id_officer' => '00018' ,
        'name' => 'Brandon Stark' ,
        'dob' => '1997-05-04' ,
        'position' => 'pro2' ,
        'gender' => 'M' ,
        'id_area' => '2'
    ]);

    // 5
    DB::table('officers')->insert([
        'id_officer' => '00019' ,
        'name' => 'Daniel Watson' ,
        'dob' => '1997-09-04' ,
        'position' => 'Correctional Officer' ,
        'gender' => 'M' ,
        'id_area' => '2'
    ]);

    // 1
    DB::table('officers')->insert([
        'id_officer' => '00020'  ,
        'name' => 'Derek Arryn' ,
        'dob' => '1997-08-10' ,
        'position' => 'Correctional Officer' ,
        'gender' => 'M' ,
        'id_area' => '2'
    ]);

    DB::table('officers')->insert([
        'id_officer' => '00021' ,
        'name' => 'Drake Ericsen' ,
        'dob' => '1997-08-15' ,
        'position' => 'Correctional Officer' ,
        'gender' => 'M' ,
        'id_area' => '2'
    ]);

    DB::table('officers')->insert([
        'id_officer' => '00022' ,
        'name' => 'Xavi Alonso' ,
        'dob' => '1997-10-11' ,
        'position' => 'Correctional Officer' ,
        'gender' => 'M' ,
        'id_area' => '2'
    ]);

    // 5
    DB::table('officers')->insert([
        'id_officer' => '00023' ,
        'name' => 'Jihadi John' ,
        'dob' => '1997-09-04' ,
        'position' => 'Correctional Officer' ,
        'gender' => 'M' ,
        'id_area' => '2'
    ]);
    //
    DB::table('officers')->insert([
        'id_officer' => '00024'  ,
        'name' => 'Uzumaki Naruto' ,
        'dob' => '1997-08-05' ,
        'position' => 'Correctional Officer' ,
        'gender' => 'M' ,
        'id_area' => '2'
    ]);

    DB::table('officers')->insert([
        'id_officer' => '00025' ,
        'name' => 'Shimura Shinpachi' ,
        'dob' => '1997-08-04' ,
        'position' => 'pro2' ,
        'gender' => 'M' ,
        'id_area' => '2'
    ]);

    DB::table('officers')->insert([
        'id_officer' => '00026' ,
        'name' => 'Tyrian Lannister' ,
        'dob' => '1997-08-04' ,
        'position' => 'pro2' ,
        'gender' => 'M' ,
        'id_area' => '2'
    ]);

    // 10 area 2
    DB::table('officers')->insert([
        'id_officer' => '00027' ,
        'name' => 'Babie Shark' ,
        'dob' => '1997-08-01' ,
        'position' => 'Correctional Officer' ,
        'gender' => 'M' ,
        'id_area' => '2'
    ]);

    DB::table('officers')->insert([
        'id_officer' => '00028' ,
        'name' => 'Shimura Tae' ,
        'dob' => '1997-08-04' ,
        'position' => 'Correctional Officer' ,
        'gender' => 'F' ,
        'id_area' => '2'
    ]);

    DB::table('officers')->insert([
        'id_officer' => '00029' ,
        'name' => 'Shimura Shinpachi' ,
        'dob' => '1997-04-04' ,
        'position' => 'Correctional Officer' ,
        'gender' => 'M' ,
        'id_area' => '2'
    ]);

    DB::table('officers')->insert([
        'id_officer' => '00030' ,
        'name' => 'Hugh Hugo' ,
        'dob' => '1997-02-04' ,
        'position' => 'Correctional Officer' ,
        'gender' => 'M' ,
        'id_area' => '2'
    ]);

    //area 3

    DB::table('officers')->insert([
        'id_officer' => '00031' ,
        'name' => 'Sarah Gray' ,
        'dob' => '1997-02-04' ,
        'position' => 'Correctional Officer' ,
        'gender' => 'M' ,
        'id_area' => '3'
    ]);

    DB::table('officers')->insert([
        'id_officer' => '00032' ,
        'name' => 'Logan Corner' ,
        'dob' => '1997-02-05' ,
        'position' => 'Correctional Officer' ,
        'gender' => 'M' ,
        'id_area' => '3'
    ]);

    DB::table('officers')->insert([
        'id_officer' => '00033' ,
        'name' => 'Brian Cooper' ,
        'dob' => '1997-02-11' ,
        'position' => 'Correctional Officer' ,
        'gender' => 'M' ,
        'id_area' => '3'
    ]);

    DB::table('officers')->insert([
        'id_officer' => '00034' ,
        'name' => 'Dennis Ritchie' ,
        'dob' => '1995-11-11' ,
        'position' => 'Correctional Officer' ,
        'gender' => 'M' ,
        'id_area' => '3'
    ]);

    DB::table('officers')->insert([
        'id_officer' => '00035' ,
        'name' => 'David Zussman' ,
        'dob' => '1997-05-05' ,
        'position' => 'Correctional Officer' ,
        'gender' => 'M' ,
        'id_area' => '3'
    ]);

    DB::table('officers')->insert([
        'id_officer' => '00036' ,
        'name' => 'Eric Carter' ,
        'dob' => '1997-05-06' ,
        'position' => 'Correctional Officer' ,
        'gender' => 'M' ,
        'id_area' => '3'
    ]);

    DB::table('officers')->insert([
        'id_officer' => '00037' ,
        'name' => 'Yusof Ossas' ,
        'dob' => '1997-04-03' ,
        'position' => 'Correctional Officer' ,
        'gender' => 'M' ,
        'id_area' => '3'
    ]);

    DB::table('officers')->insert([
        'id_officer' => '00038' ,
        'name' => 'Jackie Chanarong' ,
        'dob' => '1997-10-10' ,
        'position' => 'Correctional Officer' ,
        'gender' => 'M' ,
        'id_area' => '3'
    ]);

    DB::table('officers')->insert([
        'id_officer' => '00039' ,
        'name' => 'Rachel Costa' ,
        'dob' => '1997-06-06' ,
        'position' => 'Correctional Officer' ,
        'gender' => 'F' ,
        'id_area' => '3'
    ]);

    DB::table('officers')->insert([
        'id_officer' => '00040' ,
        'name' => 'Alexis Sandres' ,
        'dob' => '1997-07-07' ,
        'position' => 'Correctional Officer' ,
        'gender' => 'M' ,
        'id_area' => '3'
    ]);

//area 4

    DB::table('officers')->insert([
        'id_officer' => '00041' ,
        'name' => 'Johny Bravo' ,
        'dob' => '1997-05-03' ,
        'position' => 'Correctional Officer' ,
        'gender' => 'M' ,
        'id_area' => '4'
    ]);

    DB::table('officers')->insert([
        'id_officer' => '00042' ,
        'name' => 'Dennis Grall' ,
        'dob' => '1997-05-04' ,
        'position' => 'Correctional Officer' ,
        'gender' => 'M' ,
        'id_area' => '4'
    ]);

    DB::table('officers')->insert([
        'id_officer' => '00043' ,
        'name' => 'Sebastian Castellanos' ,
        'dob' => '1997-05-07' ,
        'position' => 'Correctional Officer' ,
        'gender' => 'M' ,
        'id_area' => '4'
    ]);

    DB::table('officers')->insert([
        'id_officer' => '00044' ,
        'name' => 'Julie Kidman' ,
        'dob' => '1997-01-01' ,
        'position' => 'Correctional Officer' ,
        'gender' => 'F' ,
        'id_area' => '4'
    ]);

    DB::table('officers')->insert([
        'id_officer' => '00045' ,
        'name' => 'Mohammed Ali' ,
        'dob' => '1997-01-01' ,
        'position' => 'Correctional Officer' ,
        'gender' => 'M' ,
        'id_area' => '4'
    ]);

    DB::table('officers')->insert([
        'id_officer' => '00046' ,
        'name' => 'Natasha Onaleva' ,
        'dob' => '1997-09-09' ,
        'position' => 'Correctional Officer' ,
        'gender' => 'F' ,
        'id_area' => '4'
    ]);

    DB::table('officers')->insert([
        'id_officer' => '00047' ,
        'name' => 'Selena Wilson' ,
        'dob' => '1997-02-02' ,
        'position' => 'Correctional Officer' ,
        'gender' => 'M' ,
        'id_area' => '4'
    ]);

    DB::table('officers')->insert([
        'id_officer' => '00048' ,
        'name' => 'Jonhnie O’Sullivan' ,
        'dob' => '1997-10-10' ,
        'position' => 'Correctional Officer' ,
        'gender' => 'M' ,
        'id_area' => '4'
    ]);

    DB::table('officers')->insert([
        'id_officer' => '00049' ,
        'name' => 'Bruno Vars' ,
        'dob' => '1992-05-03' ,
        'position' => 'Correctional Officer' ,
        'gender' => 'M' ,
        'id_area' => '4'
    ]);

    DB::table('officers')->insert([
        'id_officer' => '00050' ,
        'name' => 'Sam Blacksmith' ,
        'dob' => '1994-08-01' ,
        'position' => 'Correctional Officer' ,
        'gender' => 'M' ,
        'id_area' => '4'
    ]);

// area 5

    DB::table('officers')->insert([
        'id_officer' => '00051' ,
        'name' => 'Buzz Lightyear' ,
        'dob' => '1996-11-12' ,
        'position' => 'Correctional Officer' ,
        'gender' => 'M' ,
        'id_area' => '5'
    ]);

    DB::table('officers')->insert([
        'id_officer' => '00052' ,
        'name' => 'Tony Slark' ,
        'dob' => '1996-05-06' ,
        'position' => 'Correctional Officer' ,
        'gender' => 'M' ,
        'id_area' => '5'
    ]);

    DB::table('officers')->insert([
        'id_officer' => '00053' ,
        'name' => 'Abdullahu Usman' ,
        'dob' => '1996-05-08' ,
        'position' => 'Correctional Officer' ,
        'gender' => 'M' ,
        'id_area' => '5'
    ]);

    DB::table('officers')->insert([
        'id_officer' => '00054' ,
        'name' => 'Iori Kogawa' ,
        'dob' => '1996-10-06' ,
        'position' => 'Correctional Officer' ,
        'gender' => 'F' ,
        'id_area' => '5'
    ]);

    DB::table('officers')->insert([
        'id_officer' => '00055' ,
        'name' => 'Maria Ozawa' ,
        'dob' => '1996-09-11' ,
        'position' => 'Correctional Officer' ,
        'gender' => 'F' ,
        'id_area' => '5'
    ]);

    DB::table('officers')->insert([
        'id_officer' => '00056' ,
        'name' => 'Kenshiro Daisense' ,
        'dob' => '1996-01-01' ,
        'position' => 'Correctional Officer' ,
        'gender' => 'M' ,
        'id_area' => '5'
    ]);

    DB::table('officers')->insert([
        'id_officer' => '00057' ,
        'name' => 'Monkey D. Roger' ,
        'dob' => '1993-10-06' ,
        'position' => 'Correctional Officer' ,
        'gender' => 'M' ,
        'id_area' => '5'
    ]);

    DB::table('officers')->insert([
        'id_officer' => '00058' ,
        'name' => 'Patrik Kanser' ,
        'dob' => '1995-05-10' ,
        'position' => 'Correctional Officer' ,
        'gender' => 'M' ,
        'id_area' => '5'
    ]);

    DB::table('officers')->insert([
        'id_officer' => '00059' ,
        'name' => 'Ross Roma' ,
        'dob' => '1996-09-03' ,
        'position' => 'Correctional Officer' ,
        'gender' => 'M' ,
        'id_area' => '5'
    ]);

    DB::table('officers')->insert([
        'id_officer' => '00060' ,
        'name' => 'Reynold Ray' ,
        'dob' => '1995-08-06' ,
        'position' => 'Correctional Officer' ,
        'gender' => 'M' ,
        'id_area' => '5'
    ]);

// area 6

    DB::table('officers')->insert([
        'id_officer' => '00061' ,
        'name' => 'Precius Py' ,
        'dob' => '1997-02-06' ,
        'position' => 'Correctional Officer' ,
        'gender' => 'M' ,
        'id_area' => '6'
    ]);

    DB::table('officers')->insert([
        'id_officer' => '00062' ,
        'name' => 'Tobi Wan' ,
        'dob' => '1997-02-03' ,
        'position' => 'Correctional Officer' ,
        'gender' => 'M' ,
        'id_area' => '6'
    ]);

    DB::table('officers')->insert([
        'id_officer' => '00063' ,
        'name' => 'Peter Parkerz' ,
        'dob' => '1997-02-05' ,
        'position' => 'Correctional Officer' ,
        'gender' => 'M' ,
        'id_area' => '6'
    ]);

    DB::table('officers')->insert([
        'id_officer' => '00064' ,
        'name' => 'Orson Arao' ,
        'dob' => '1997-05-06' ,
        'position' => 'Correctional Officer' ,
        'gender' => 'M' ,
        'id_area' => '6'
    ]);

    DB::table('officers')->insert([
        'id_officer' => '00065' ,
        'name' => 'Louis Xander' ,
        'dob' => '1997-02-04' ,
        'position' => 'Correctional Officer' ,
        'gender' => 'M' ,
        'id_area' => '6'
    ]);

    DB::table('officers')->insert([
        'id_officer' => '00066' ,
        'name' => 'Norton Nart' ,
        'dob' => '1997-03-06' ,
        'position' => 'Correctional Officer' ,
        'gender' => 'M' ,
        'id_area' => '6'
    ]);

    DB::table('officers')->insert([
        'id_officer' => '00067' ,
        'name' => 'Gracius Romeo' ,
        'dob' => '1997-02-10' ,
        'position' => 'Olivier Giroud' ,
        'gender' => 'M' ,
        'id_area' => '6'
    ]);

    DB::table('officers')->insert([
        'id_officer' => '00068' ,
        'name' => 'Disuki Deeva' ,
        'dob' => '1997-02-06' ,
        'position' => 'Pakin Lovedog' ,
        'gender' => 'M' ,
        'id_area' => '6'
    ]);

    DB::table('officers')->insert([
        'id_officer' => '00069' ,
        'name' => 'Jumbo Plus' ,
        'dob' => '1997-05-10' ,
        'position' => 'Correctional Officer' ,
        'gender' => 'M' ,
        'id_area' => '6'
    ]);

    DB::table('officers')->insert([
        'id_officer' => '00070' ,
        'name' => 'Den Gran' ,
        'dob' => '1997-08-07' ,
        'position' => 'Correctional Officer' ,
        'gender' => 'M' ,
        'id_area' => '6'
    ]);



    }
}
