<?php

use Illuminate\Database\Seeder;

class felhasznalok_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('felhasznalok')->insert([
            "email" => "teszt@teszt.teszt",
            "jelszo" => Hash::make('teszt'),
            "vez_nev" => "Teszt",
            "ker_nev" => "User"
        ]);
    }
}
