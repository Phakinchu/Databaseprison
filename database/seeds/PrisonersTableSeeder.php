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
            'fname' => 'Yuthapol',
            'lname' => 'Somchit' ,
            'address' => '239' ,
            'dob' => '1997-08-25' ,
            'gender' => 'M' ,
            'id_level' => '1'  ,
            'id_cell' => '1'  ,
            'scorepri' => 10
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00002' ,
            'fname' => 'Zoe' ,
            'lname' => 'Ray' ,
            'address' => '225' ,
            'dob' => '1997-08-25' ,
            'gender' => 'M' ,
            'id_level' => '1'  ,
            'id_cell' => '1'  ,
            'scorepri' => 10
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00003' ,
            'fname' => 'Satianporn' ,
            'lname' => 'Khumdee' ,
            'address' => '432' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => 5  ,
            'id_cell' => '1'  ,
            'scorepri' => 25
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00004' ,
            'fname' => 'Algernon' ,
            'lname' => 'Cexa' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '2'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00005' ,
            'fname' => 'Alan' ,
            'lname' => 'Violet' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '2'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00006' ,
            'fname' => 'Alen' ,
            'lname' => 'Walker' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '3'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00007' ,
            'fname' => 'Genie' ,
            'lname' => 'EAlbert ' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '4'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00008' ,
            'fname' => 'Laay' ,
            'lname' => 'Elia' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '6'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00009' ,
            'fname' => 'Tama' ,
            'lname' => 'Ces' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '8'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00010' ,
            'fname' => 'Alexander ' ,
            'lname' => 'Aiza' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '15'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00011' ,
            'fname' => 'Lex' ,
            'lname' => 'Cancer' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '16'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00012' ,
            'fname' => 'Lux' ,
            'lname' => 'Sanook' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '9'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00013' ,
            'fname' => 'Sandy' ,
            'lname' => 'Kaya' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '20'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00014' ,
            'fname' => 'Black' ,
            'lname' => 'Kingbar' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '22'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00015' ,
            'fname' => 'Mant' ,
            'lname' => 'Cytle' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '14'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00016' ,
            'fname' => 'Neo' ,
            'lname' => 'Next' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '25'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00017' ,
            'fname' => 'Algernon ' ,
            'lname' => 'Gray' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '25'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00018' ,
            'fname' => 'Algy' ,
            'lname' => 'Ice' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '26'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00019' ,
            'fname' => 'Lonny' ,
            'lname' => 'Alons' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '27'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00020' ,
            'fname' => 'Vinny' ,
            'lname' => 'Pooh' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '28'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00021' ,
            'fname' => 'Ambie' ,
            'lname' => 'Barber' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '28'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00022' ,
            'fname' => 'Andrew' ,
            'lname' => 'Drew' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '30'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00023' ,
            'fname' => 'Ansel' ,
            'lname' => 'Xera' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '30'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00024' ,
            'fname' => 'Gustus' ,
            'lname' => 'Gooze' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '31'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00025' ,
            'fname' => 'Nuti' ,
            'lname' => 'Suri' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '2'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00026' ,
            'fname' => 'Win' ,
            'lname' => 'Loser' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '33'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00027' ,
            'fname' => 'Barry' ,
            'lname' => 'Barlet' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '35'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00028' ,
            'fname' => 'Barreta' ,
            'lname' => 'Xacer' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '35'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00029' ,
            'fname' => 'Batty' ,
            'lname' => 'Bartho' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '37'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00030' ,
            'fname' => 'Basie' ,
            'lname' => 'Braza' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '37'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00031' ,
            'fname' => 'Benjamin ' ,
            'lname' => 'Franker' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '38'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00032' ,
            'fname' => 'Arshavi' ,
            'lname' => 'Lazada' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '38'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00033' ,
            'fname' => 'Arsene' ,
            'lname' => 'Wengera' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '15'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00034' ,
            'fname' => 'Julian' ,
            'lname' => 'Cesar' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '5'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00035' ,
            'fname' => 'William' ,
            'lname' => 'Billy' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '40'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00036' ,
            'fname' => 'Naruza' ,
            'lname' => 'Uzuma' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '41'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00037' ,
            'fname' => 'Julian' ,
            'lname' => 'Cesar' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '41'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00038' ,
            'fname' => 'Ford' ,
            'lname' => 'Honda' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '42'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00039' ,
            'fname' => 'Romeo' ,
            'lname' => 'Lukaku' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '35'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00040' ,
            'fname' => 'Inui' ,
            'lname' => 'Yasha' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '37'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00041' ,
            'fname' => 'Echizen' ,
            'lname' => 'Ryoma' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '37'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00042' ,
            'fname' => 'Seijuro' ,
            'lname' => 'Calder' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '38'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00043' ,
            'fname' => 'Carboy' ,
            'lname' => 'Yagazar' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '38'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00044' ,
            'fname' => 'Aden' ,
            'lname' => 'Yager' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '39'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00045' ,
            'fname' => 'Hikaru' ,
            'lname' => 'Nogo' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '45'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00046' ,
            'fname' => 'Sai' ,
            'lname' => 'Lander' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '45'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00047' ,
            'fname' => 'Cameron ' ,
            'lname' => 'Ron' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '47'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00048' ,
            'fname' => 'Casper ' ,
            'lname' => 'Laser' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '47'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00049' ,
            'fname' => 'Ricky' ,
            'lname' => 'Cillis' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '48'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00050' ,
            'fname' => 'Cristian' ,
            'lname' => 'Ronal' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '49'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00051' ,
            'fname' => 'Claud' ,
            'lname' => 'Cracker' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '50'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00052' ,
            'fname' => 'Fortune' ,
            'lname' => 'Cookie' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '50'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00053' ,
            'fname' => 'Cliff' ,
            'lname' => 'Carer' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '51'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00054' ,
            'fname' => 'Collin ' ,
            'lname' => 'Careen' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '52'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00055' ,
            'fname' => 'Dusky' ,
            'lname' => 'Desmond ' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '55'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00056' ,
            'fname' => 'Domenick ' ,
            'lname' => 'Domarin' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '54'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00057' ,
            'fname' => 'Dwayne' ,
            'lname' => 'Dwarf' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '54'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00058' ,
            'fname' => 'Eddie' ,
            'lname' => 'Pheenaruk' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '55'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00059' ,
            'fname' => 'Alben' ,
            'lname' => 'Istype' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '60'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00060' ,
            'fname' => 'Julian' ,
            'lname' => 'Cesar' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '60'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00061' ,
            'fname' => 'Felix ' ,
            'lname' => 'Lix' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '61'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00062' ,
            'fname' => 'Ferguson' ,
            'lname' => 'Fergie' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '62'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00063' ,
            'fname' => 'Lloyd' ,
            'lname' => 'Leeroy' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '64'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00064' ,
            'fname' => 'Francis ' ,
            'lname' => 'Congorang' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '65'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00065' ,
            'fname' => 'Ragaza' ,
            'lname' => 'Onlin' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '68'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00066' ,
            'fname' => 'Vitas' ,
            'lname' => 'Opera' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '70'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00067' ,
            'fname' => 'Fredrick' ,
            'lname' => 'Gege' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '70'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00068' ,
            'fname' => 'Jeff' ,
            'lname' => 'Jeffery ' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '69'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00069' ,
            'fname' => 'Bert' ,
            'lname' => 'Romqwan' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '69'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00070' ,
            'fname' => 'Griffin ' ,
            'lname' => 'Roma' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '72'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00071' ,
            'fname' => 'Yuyu' ,
            'lname' => 'Hakusho' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '73'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00072' ,
            'fname' => 'Harvey ' ,
            'lname' => 'Moon' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '73'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00073' ,
            'fname' => 'Playe' ,
            'lname' => 'Station' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '74'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00074' ,
            'fname' => 'Plala' ,
            'lname' => 'Stachor' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '76'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00075' ,
            'fname' => 'Harry' ,
            'lname' => 'Hooky' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '75'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00076' ,
            'fname' => 'Deva' ,
            'lname' => 'Onlino' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '74'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00077' ,
            'fname' => 'Horace' ,
            'lname' => 'Horuse' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '77'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00078' ,
            'fname' => 'Yaphet' ,
            'lname' => 'Shadow' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '78'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00079' ,
            'fname' => 'Feind' ,
            'lname' => 'Nevermore' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '78'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00080' ,
            'fname' => 'Mamie' ,
            'lname' => 'Pokko' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '79'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00081' ,
            'fname' => 'Jackie' ,
            'lname' => 'Challen' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '81'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00082' ,
            'fname' => 'Tomy' ,
            'lname' => 'Jerra' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '81'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00083' ,
            'fname' => 'Jonny' ,
            'lname' => 'Albara' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '83'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00084' ,
            'fname' => 'Joey' ,
            'lname' => 'Boyer' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '83'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00085' ,
            'fname' => 'Kenny' ,
            'lname' => 'Risky' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '84'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00086' ,
            'fname' => ' Christopher' ,
            'lname' => 'Colimmus' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '85'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00087' ,
            'fname' => 'Leon ' ,
            'lname' => 'Lee' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '88'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00088' ,
            'fname' => 'Leslie' ,
            'lname' => 'Bankin' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '89'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00089' ,
            'fname' => 'Alonso' ,
            'lname' => 'Lonny' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '91'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00090' ,
            'fname' => 'Manny' ,
            'lname' => 'Parkyo' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '91'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00091' ,
            'fname' => 'Matthias ' ,
            'lname' => 'Matter' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '100'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00092' ,
            'fname' => 'Maximilian ' ,
            'lname' => 'Moohamhud' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '93'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00093' ,
            'fname' => 'Myles ' ,
            'lname' => 'Mylo' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '95'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00094' ,
            'fname' => 'Nathan' ,
            'lname' => 'Nara' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '100'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00095' ,
            'fname' => 'Ozzie' ,
            'lname' => 'Saera' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '99'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00096' ,
            'fname' => 'Petie' ,
            'lname' => 'Phillip' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '99'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00097' ,
            'fname' => 'Quicky' ,
            'lname' => 'Silver' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '99'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00098' ,
            'fname' => 'Ray' ,
            'lname' => 'Reynold' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '98'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00099' ,
            'fname' => 'Kendrick' ,
            'lname' => 'Duckduck' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '100'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00100' ,
            'fname' => 'Arcy' ,
            'lname' => 'Warden' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '101'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00101' ,
            'fname' => 'Aegisa' ,
            'lname' => 'Roshan' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '102'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00102' ,
            'fname' => 'Chuan' ,
            'lname' => 'Invis' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '119'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00103' ,
            'fname' => 'Sumail' ,
            'lname' => 'Artaor' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '108'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00104' ,
            'fname' => 'Arteezy' ,
            'lname' => 'Imdone' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '105'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00105' ,
            'fname' => 'Kise' ,
            'lname' => 'Ryota' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '104'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00106' ,
            'fname' => 'Akashi' ,
            'lname' => 'Seijuro' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '105'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00107' ,
            'fname' => 'Mido' ,
            'lname' => 'Rima' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '106'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00108' ,
            'fname' => 'Thomas ' ,
            'lname' => 'Edisa' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '110'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00109' ,
            'fname' => 'Treeof' ,
            'lname' => 'Xavier' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '109'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00110' ,
            'fname' => 'Uriah' ,
            'lname' => 'Huha' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '108'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00111' ,
            'fname' => 'Wallis ' ,
            'lname' => 'Larana' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '108'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00112' ,
            'fname' => 'Woody' ,
            'lname' => 'Talkma' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '115'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00113' ,
            'fname' => 'Chala' ,
            'lname' => 'Headsha' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '111'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00114' ,
            'fname' => 'Wayne' ,
            'lname' => 'Loona' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '102'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00115' ,
            'fname' => 'Yaya' ,
            'lname' => 'Toure' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '5'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00116' ,
            'fname' => 'Drink' ,
            'lname' => 'Water' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '118'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00117' ,
            'fname' => 'Lomon' ,
            'lname' => 'Sweat' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '119'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00118' ,
            'fname' => 'Tom' ,
            'lname' => 'Cruise' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '120'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00119' ,
            'fname' => 'Mikael' ,
            'lname' => 'Arteta' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '120'  ,
            'scorepri' => 60
        ]);
 
        DB::table('prisoners')->insert([
            'id_prisoner' => '00120' ,
            'fname' => 'Ramsry' ,
            'lname' => 'Aeron' ,
            'address' => '888' ,
            'dob' => '1999-09-25' ,
            'gender' => 'M' ,
            'id_level' => '5'  ,
            'id_cell' => '5'  ,
            'scorepri' => 60
        ]);

    }
}
