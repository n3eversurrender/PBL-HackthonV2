<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpesialisasiSeeder extends Seeder
{
    public function run()
    {
        DB::table('spesialisasi')->insert([
            ['pelatih_id' => 1, 'nama_spesialisasi' => 'Kursus Bahasa Inggris'],
            ['pelatih_id' => 2, 'nama_spesialisasi' => 'Pelatihan Public Speaking'],
            ['pelatih_id' => 1, 'nama_spesialisasi' => 'Kursus Matematika'],
            ['pelatih_id' => 4, 'nama_spesialisasi' => 'Pelatihan Keterampilan Komputer'],
            ['pelatih_id' => 3, 'nama_spesialisasi' => 'Kursus Fotografi'],
        ]);
    }
}
