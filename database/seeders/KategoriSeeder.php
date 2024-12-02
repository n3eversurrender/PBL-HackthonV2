<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kategori')->insert([
            ['nama_kategori' => 'Minyak dan Gas'],
            ['nama_kategori' => 'Kelautan'],
            ['nama_kategori' => 'Konstruksi'],
            ['nama_kategori' => 'Elektronik'],
            ['nama_kategori' => 'Logam dan Baja'],
            ['nama_kategori' => 'Plastik'],
            ['nama_kategori' => 'Energi Terbarukan'],
        ]);
    }
}
