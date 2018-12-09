<?php

use Illuminate\Database\Seeder;

class termekek_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('termekek')->insert([
            "termek_nev" => "Huawei P20 Lite 64GB Dual Mobiltelefon",
            "kat_id" => 1,
            "mennyiseg" => 3,
            "netto_ar" => 74999,
            "afa_kulcs" => 27
        ]);

        DB::table('termekek')->insert([
            "termek_nev" => "Huawei Mate 20 Pro 128GB Dual Mobiltelefon",
            "kat_id" => 1,
            "mennyiseg" => 5,
            "netto_ar" => 280900,
            "afa_kulcs" => 27,
            "kedvezmeny" => 5
        ]);

        DB::table('termekek')->insert([
            "termek_nev" => "Huawei Mate 20 Lite 64GB Dual Mobiltelefon",
            "kat_id" => 1,
            "mennyiseg" => 2,
            "netto_ar" => 5000,
            "afa_kulcs" => 27
        ]);
        DB::table('termekek')->insert([
            "termek_nev" => "Samsung Galaxy S8 64GB G950F Mobiltelefon",
            "kat_id" => 1,
            "mennyiseg" => 20,
            "netto_ar" => 122800,
            "afa_kulcs" => 27
        ]);
        DB::table('termekek')->insert([
            "termek_nev" => "Xiaomi Redmi 6 32GB Mobiltelefon",
            "kat_id" => 1,
            "mennyiseg" => 10,
            "netto_ar" => 36300,
            "afa_kulcs" => 27
        ]);
        //---------------------------------------------------------------
        /*DB::table('termekek')->insert([
            "termek_nev" => "",
            "kat_id" => 2,
            "mennyiseg" => 10,
            "netto_ar" => ,
            "afa_kulcs" => 27
        ]);*/
        DB::table('termekek')->insert([
            "termek_nev" => "Logitech G502 Proteus",
            "kat_id" => 2,
            "mennyiseg" => 10,
            "netto_ar" => 20490,
            "afa_kulcs" => 27
        ]);
        DB::table('termekek')->insert([
            "termek_nev" => "Genius NX-7000",
            "kat_id" => 2,
            "mennyiseg" => 10,
            "netto_ar" => 1711,
            "afa_kulcs" => 27
        ]);
        DB::table('termekek')->insert([
            "termek_nev" => "Razer DeathAdder Elite",
            "kat_id" => 2,
            "mennyiseg" => 10,
            "netto_ar" => 18990,
            "afa_kulcs" => 27
        ]);
        DB::table('termekek')->insert([
            "termek_nev" => "Genius DX-110 USB",
            "kat_id" => 2,
            "mennyiseg" => 10,
            "netto_ar" => 890,
            "afa_kulcs" => 27
        ]);
        DB::table('termekek')->insert([
            "termek_nev" => "Genius DX-120",
            "kat_id" => 2,
            "mennyiseg" => 10,
            "netto_ar" => 905,
            "afa_kulcs" => 27
        ]);
        //------------------------------------------
        DB::table('termekek')->insert([
            "termek_nev" => "Hama uRage M3chanical",
            "kat_id" => 3,
            "mennyiseg" => 10,
            "netto_ar" => 27170,
            "afa_kulcs" => 27
        ]);DB::table('termekek')->insert([
            "termek_nev" => "Genius KB-8000X",
            "kat_id" => 3,
            "mennyiseg" => 10,
            "netto_ar" => 4140,
            "afa_kulcs" => 27
        ]);DB::table('termekek')->insert([
            "termek_nev" => "Spirit Of Gamer K500",
            "kat_id" => 3,
            "mennyiseg" => 10,
            "netto_ar" => 11990,
            "afa_kulcs" => 27
        ]);DB::table('termekek')->insert([
            "termek_nev" => "Spirit Of Gamer Pro K5",
            "kat_id" => 3,
            "mennyiseg" => 10,
            "netto_ar" => 4990,
            "afa_kulcs" => 27
        ]);DB::table('termekek')->insert([
            "termek_nev" => "Kingston HyperX Alloy FPS HX-KB1",
            "kat_id" => 3,
            "mennyiseg" => 10,
            "netto_ar" => 26590,
            "afa_kulcs" => 27
        ]);
        //----------------------------------------------------------------
        DB::table('termekek')->insert([
            "termek_nev" => "LG 25UM58-P Monitor",
            "kat_id" => 4,
            "mennyiseg" => 10,
            "netto_ar" => 44580,
            "afa_kulcs" => 27
        ]);DB::table('termekek')->insert([
            "termek_nev" => "Samsung S24D330HSX Monitor",
            "kat_id" => 4,
            "mennyiseg" => 10,
            "netto_ar" => 31990,
            "afa_kulcs" => 27
        ]);DB::table('termekek')->insert([
            "termek_nev" => "Acer Predator XB241YUbmiprz (UM. QX1EE. 001) Monitor",
            "kat_id" => 4,
            "mennyiseg" => 10,
            "netto_ar" => 159900,
            "afa_kulcs" => 27
        ]);DB::table('termekek')->insert([
            "termek_nev" => "Acer KG241P (UM. FX1EE. P01) Monitor",
            "kat_id" => 4,
            "mennyiseg" => 10,
            "netto_ar" => 64900,
            "afa_kulcs" => 27
        ]);DB::table('termekek')->insert([
            "termek_nev" => "LG 32GK850G-B Monitor",
            "kat_id" => 4,
            "mennyiseg" => 10,
            "netto_ar" => 220769,
            "afa_kulcs" => 27
        ]);
        
    }
}
