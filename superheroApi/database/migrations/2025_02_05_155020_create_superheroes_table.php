<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuperheroesTable extends Migration
{
    public function up()
    {
        Schema::create('superheroes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('gender');
            $table->string('planet');
            $table->text('description');
            $table->string('superpower');
            $table->string('city_protection');
            $table->string('gadgets');
            $table->string('team');
            $table->string('vehicle');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('superheroes');
    }
}