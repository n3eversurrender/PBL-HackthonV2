<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PesertaSeeder extends Seeder
{
    public function run()
    {
        DB::table('peserta')->insert([
            ['pengguna_id' => 2, 'pendidikan' => 'S1 Teknik Informatika', 'pengalaman_kerja' => '1 tahun di startup'],
            ['pengguna_id' => 3, 'pendidikan' => 'S1 Desain Grafis', 'pengalaman_kerja' => 'Magang 6 bulan di agensi'],
            ['pengguna_id' => 5, 'pendidikan' => 'SMA', 'pengalaman_kerja' => 'Freelancer selama 2 tahun'],
            ['pengguna_id' => 1, 'pendidikan' => 'S2 Pendidikan', 'pengalaman_kerja' => '3 tahun sebagai guru'],
            ['pengguna_id' => 4, 'pendidikan' => 'S1 Psikologi', 'pengalaman_kerja' => '1 tahun di perusahaan HR'],
        ]);
    }
}
