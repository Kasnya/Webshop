<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(felhasznalok_seeder::class);
        $this->call(felhasznalo_cim_seeder::class);
        $this->call(kategoriak_seeder::class);
        $this->call(termekek_seeder::class);
    }
}
