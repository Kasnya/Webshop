<?php

use Illuminate\Database\Seeder;

class kategoriak_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kategoriak')->insert([
            "kat_nev" => "Mobil"
        ]);

        DB::table('kategoriak')->insert([
            "kat_nev" => "Egér"
        ]);
        DB::table('kategoriak')->insert([
            "kat_nev" => "Billentyűzet"
        ]);
        
        DB::table('kategoriak')->insert([
            "kat_nev" => "Monitor"
        ]);
    }
}
