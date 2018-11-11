<?php

use Illuminate\Database\Seeder;

class felhasznalo_cim_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('felhasznalo_cim')->insert([
            "user_id" => 1,
            "irszam" => 1000,
            "varos" => "Teszt City",
            "utca" => "Teszt Street",
            "hazszam" => 1
        ]);
    }
}
