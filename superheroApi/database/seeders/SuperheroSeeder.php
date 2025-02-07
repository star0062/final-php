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
use App\Models\Superhero; // Vérifier que le bon modèle est utilisé
use Faker\Factory as Faker;

class SuperheroSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 50; $i++) {
            Superhero::create([
                'name' => $faker->name,
                'sex' => $faker->randomElement(['male', 'female', 'other']),
                'world' => $faker->boolean ? $faker->word : null,
                'description' => $faker->sentence,
                'superpower' => $faker->boolean ? $faker->word : null,
                'cityProtection' => $faker->city,
                'gadgets' => $faker->boolean ? $faker->word : null,
                'team' => $faker->boolean ? $faker->word : null,
                'car' => $faker->boolean ? $faker->word : null,
            ]);
        }
    }
}
