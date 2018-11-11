<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRendelesekTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rendelesek', function (Blueprint $table) {
            $table->increments('rendeles_id');
            $table->integer('user_id');
            $table->timestamp('rendelesi_datum');
            $table->integer('szallitasi_koltseg');
            $table->string('statusz');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rendelesek');
    }
}
