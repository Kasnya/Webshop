<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRendeltCuccokTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rendelt_cuccok', function (Blueprint $table) {
            $table->integer('rendeles_id');
            $table->integer('termek_id');
            $table->integer('mennyiseg');
            $table->integer('ar');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rendelt_cuccok');
    }
}
