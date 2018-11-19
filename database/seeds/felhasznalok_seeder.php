<?php

use Illuminate\Database\Seeder;
use App\User;
class felhasznalok_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "email" => "teszt@teszt.teszt",
            "password" => Hash::make('teszt'),
            "vez_nev" => "Teszt",
            "ker_nev" => "User"
        ]);
    }
}
