<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RatingPelatihSeeder extends Seeder
{
    public function run()
    {
        DB::table('rating_pelatih')->insert([
            ['pelatih_id' => 1, 'peserta_id' => 2, 'rating' => 4],
            ['pelatih_id' => 1, 'peserta_id' => 3, 'rating' => 5],
            ['pelatih_id' => 4, 'peserta_id' => 1, 'rating' => 4],
            ['pelatih_id' => 2, 'peserta_id' => 4, 'rating' => 3],
            ['pelatih_id' => 5, 'peserta_id' => 5, 'rating' => 5],
        ]);
    }
}
