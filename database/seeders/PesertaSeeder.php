<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PesertaSeeder extends Seeder
{
    public function run()
    {
        $keahlian = ['Programming', 'Design', 'Marketing', 'Writing', 'Management'];
        for ($i = 0; $i < 10; $i++) {
            DB::table('peserta')->insert([
                'pengguna_id' => rand(1, 5), // Random pengguna_id between 1 and 5
                'pengalaman_kerja' => rand(0, 10), // Random pengalaman kerja (0-10 years)
                'nama_keahlian' => $keahlian[array_rand($keahlian)], // Random keahlian
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
