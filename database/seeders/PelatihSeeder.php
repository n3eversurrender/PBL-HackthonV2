<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PelatihSeeder extends Seeder
{
    public function run()
    {
        DB::table('pelatih')->insert([
            [
                'pengguna_id' => 1,
                'pengalaman_kerja' => 5,
                'nama_spesialisasi' => 'Personal Trainer',
                'file_sertifikasi' => 'sertifikasi_pt.pdf',
            ],
            [
                'pengguna_id' => 4,
                'pengalaman_kerja' => 3,
                'nama_spesialisasi' => 'Yoga Instructor',
                'file_sertifikasi' => 'sertifikasi_yoga.pdf',
            ],
            [
                'pengguna_id' => 2,
                'pengalaman_kerja' => 7,
                'nama_spesialisasi' => 'Strength Coach',
                'file_sertifikasi' => 'sertifikasi_strength.pdf',
            ],
            [
                'pengguna_id' => 5,
                'pengalaman_kerja' => 2,
                'nama_spesialisasi' => 'Nutrition Specialist',
                'file_sertifikasi' => 'sertifikasi_nutrition.pdf',
            ],
            [
                'pengguna_id' => 3,
                'pengalaman_kerja' => 1,
                'nama_spesialisasi' => 'CrossFit Coach',
                'file_sertifikasi' => 'sertifikasi_crossfit.pdf',
            ],
        ]);
    }
}
