<?php

namespace Database\Seeders;
#use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Superhero;

class SuperheroSeeder extends Seeder
{
    public function run(): void
    {
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 50; $i++) {
            Superhero::create([
                'name' => $faker->name,
                'gender' => $faker->randomElement(['male', 'female']),
                'planet' => $faker->word,
                'description' => $faker->sentence,
                'superpower' => $faker->word,
                'city_protection' => $faker->city,
                'gadgets' => $faker->word,
                'team' => $faker->word,
                'vehicle' => $faker->word,
            ]);
        }
    }
}
