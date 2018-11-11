<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFelhasznalokTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('felhasznalok', function (Blueprint $table) {
            $table->increments('user_id');
            $table->string('email');
            $table->string('jelszo');
            $table->string('vez_nev');
            $table->string('ker_nev');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('felhasznalok');
    }
}
