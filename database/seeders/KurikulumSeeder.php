<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KurikulumSeeder extends Seeder
{
    public function run()
    {
        DB::table('kurikulum')->insert([
            ['kursus_id' => 1, 'nama_topik' => 'Pengenalan Bahasa Inggris', 'deskripsi' => 'Pengantar mengenai Bahasa Inggris', 'durasi' => 2], // durasi dalam jam
            ['kursus_id' => 1, 'nama_topik' => 'Tata Bahasa Dasar', 'deskripsi' => 'Materi mengenai tata bahasa dasar Bahasa Inggris', 'durasi' => 3],
            ['kursus_id' => 1, 'nama_topik' => 'Latihan Mendengarkan', 'deskripsi' => 'Kegiatan latihan mendengarkan Bahasa Inggris', 'durasi' => 1],
            ['kursus_id' => 2, 'nama_topik' => 'Dasar-Dasar Public Speaking', 'deskripsi' => 'Pembelajaran mengenai public speaking untuk pemula', 'durasi' => 4],
            ['kursus_id' => 2, 'nama_topik' => 'Mengatasi Rasa Takut', 'deskripsi' => 'Teknik untuk mengatasi rasa takut saat berbicara di depan umum', 'durasi' => 2],
        ]);
    }
}
