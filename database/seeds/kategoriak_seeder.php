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
            "kat_nev" => "Teszt kategória 1"
        ]);

        DB::table('kategoriak')->insert([
            "kat_nev" => "Teszt kategória 2"
        ]);
    }
}
