<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFelhasznaloCimTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('felhasznalo_cim', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('irszam');
            $table->string('varos');
            $table->string('utca');
            $table->integer('hazszam');
            $table->integer('emelet')->nullable();
            $table->integer('ajtoszam')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('felhasznalo_cim');
    }
}
