<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuperheroTable extends Migration
{
    public function up(): void
    {
        Schema::create('superheroes', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // 1
            $table->string('sex');  // 2
            $table->string('word'); // 3
            $table->string('description'); // 4
            $table->string('superpower'); // 5
            $table->string('cityProtection'); // 6
            $table->string('gadgets'); // 7
            $table->string('team'); // 8
            $table->string('car'); // 9
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('superheroes');
    }
};
