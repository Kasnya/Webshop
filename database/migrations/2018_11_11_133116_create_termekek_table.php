<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTermekekTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('termekek', function (Blueprint $table) {
            $table->increments('id');
            $table->string('termek_nev');
            $table->integer('kat_id');
            $table->integer('mennyiseg');
            $table->integer('netto_ar');
            $table->integer('afa_kulcs');
            $table->integer('kedvezmeny')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('termekek');
    }
}
