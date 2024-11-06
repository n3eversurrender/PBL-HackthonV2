<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KeahlianSeeder extends Seeder
{
    public function run()
    {
        DB::table('keahlian')->insert([
            ['peserta_id' => 1, 'nama_keahlian' => 'Pemrograman Web'],
            ['peserta_id' => 2, 'nama_keahlian' => 'Desain UI/UX'],
            ['peserta_id' => 3, 'nama_keahlian' => 'Fotografi Digital'],
            ['peserta_id' => 4, 'nama_keahlian' => 'Analisis Data'],
            ['peserta_id' => 5, 'nama_keahlian' => 'Manajemen Proyek'],
        ]);
    }
}
