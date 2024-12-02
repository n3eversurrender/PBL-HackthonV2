<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RatingPelatihSeeder extends Seeder
{
    public function run()
    {
        DB::table('rating_pelatih')->insert([
            ['pengguna_id' => 1, 'rating' => 4.5, 'komentar' => 'Pelatih sangat berpengalaman dan jelas dalam mengajarkan materi.'],
            ['pengguna_id' => 2, 'rating' => 4.8, 'komentar' => 'Pelatih luar biasa dalam menyampaikan materi dan memberikan tips praktis.'],
            ['pengguna_id' => 3, 'rating' => 4.7, 'komentar' => 'Pelatih sangat sabar dan membantu peserta selama kursus.'],
            ['pengguna_id' => 1, 'rating' => 5.0, 'komentar' => 'Pelatih sangat profesional dan menyenangkan, memberikan penjelasan yang sangat detail.'],
            ['pengguna_id' => 2, 'rating' => 4.3, 'komentar' => 'Pelatih sangat membantu namun materi bisa lebih diperjelas.'],
        ]);
    }
}
