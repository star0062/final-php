<?php

// namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
// use Illuminate\Database\Seeder;

// class SuperheroSeeder extends Seeder
// {
    // public function run(): void
    // {
        //
    // }
// }













namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Books;

class SuperheroSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 50; $i++) {
            Books::create([
                'name' => $faker->sentence,
                'sex' => $faker->name,
                'word' => $faker->date,
                'description' => $faker->date,
                'superpower' => $faker->date,
                'cityProtection' => $faker->date,
                'gadgets' => $faker->date,
                'team' => $faker->date,
                'car' => $faker->date,
            ]);
        }
    }
}
