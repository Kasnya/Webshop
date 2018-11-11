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
            "termek_nev" => "Termék 1",
            "kat_id" => 1,
            "mennyiseg" => 3,
            "netto_ar" => 500,
            "afa_kulcs" => 27
        ]);

        DB::table('termekek')->insert([
            "termek_nev" => "Termék 2",
            "kat_id" => 1,
            "mennyiseg" => 5,
            "netto_ar" => 1000,
            "afa_kulcs" => 27,
            "kedvezmeny" => 5
        ]);

        DB::table('termekek')->insert([
            "termek_nev" => "Termék 3",
            "kat_id" => 2,
            "mennyiseg" => 2,
            "netto_ar" => 5000,
            "afa_kulcs" => 27
        ]);
    }
}
