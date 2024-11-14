<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RatingPelatihSeeder extends Seeder
{
    public function run()
    {
        DB::table('rating_pelatih')->insert([
            ['pengguna_id' => 1, 'rating' => 4.5, 'komentar' => 'Pelatih sangat berpengalaman dan jelas dalam mengajarkan materi.', 'waktu' => '2025-01-02'],
            ['pengguna_id' => 2, 'rating' => 4.8, 'komentar' => 'Pelatih luar biasa dalam menyampaikan materi dan memberikan tips praktis.', 'waktu' => '2025-01-03'],
            ['pengguna_id' => 3, 'rating' => 4.7, 'komentar' => 'Pelatih sangat sabar dan membantu peserta selama kursus.', 'waktu' => '2025-01-04'],
            ['pengguna_id' => 1, 'rating' => 5.0, 'komentar' => 'Pelatih sangat profesional dan menyenangkan, memberikan penjelasan yang sangat detail.', 'waktu' => '2025-01-05'],
            ['pengguna_id' => 2, 'rating' => 4.3, 'komentar' => 'Pelatih sangat membantu namun materi bisa lebih diperjelas.', 'waktu' => '2025-01-06'],
        ]);
    }
}
