<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class RatingKursusSeeder extends Seeder
{
    public function run()
    {
        // Initialize Faker
        $faker = Faker::create();

        // Create 30 ratings for courses with IDs 1, 2, and 3
        for ($i = 0; $i < 30; $i++) {
            DB::table('rating_kursus')->insert([
                'kursus_id' => rand(1, 3), // Randomly select course ID between 1 and 3
                'pengguna_id' => rand(4, 10), // Randomly assign a user ID (assuming 10 users for example)
                'rating' => rand(1, 5), // Random rating between 1 and 5
                'komentar' => $faker->sentence(), // Generate a random comment
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
