<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PelatihSeeder extends Seeder
{
    public function run()
    {
        DB::table('pelatih')->insert([
            ['pengguna_id' => 1, 'pengalaman_kerja' => 5, 'rating' => 4.5, 'status' => 'Aktif'],
            ['pengguna_id' => 4, 'pengalaman_kerja' => 3, 'rating' => 4.0, 'status' => 'Aktif'],
            ['pengguna_id' => 2, 'pengalaman_kerja' => 7, 'rating' => 5.0, 'status' => 'Tidak Aktif'],
            ['pengguna_id' => 5, 'pengalaman_kerja' => 2, 'rating' => 3.5, 'status' => 'Aktif'],
            ['pengguna_id' => 3, 'pengalaman_kerja' => 1, 'rating' => 4.2, 'status' => 'Aktif'],
        ]);
    }
}
