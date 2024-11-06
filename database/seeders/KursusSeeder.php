<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KursusSeeder extends Seeder
{
    public function run()
    {
        DB::table('kursus')->insert([
            ['pengguna_id' => 1, 'judul' => 'Kursus Bahasa Inggris Dasar', 'deskripsi' => 'Belajar Bahasa Inggris dari nol', 'jadwal' => '2024-12-01 10:00:00', 'harga' => 500000, 'tingkat_kesulitan' => 'Mudah', 'rating' => 4.5, 'status' => 'Aktif', 'tgl_mulai' => '2024-12-01', 'tgl_selesai' => '2024-12-31', 'kapasitas' => 20],
            ['pengguna_id' => 2, 'judul' => 'Kursus Public Speaking', 'deskripsi' => 'Tingkatkan kemampuan berbicara di depan umum', 'jadwal' => '2024-12-05 10:00:00', 'harga' => 750000, 'tingkat_kesulitan' => 'Sedang', 'rating' => 4.8, 'status' => 'Aktif', 'tgl_mulai' => '2024-12-05', 'tgl_selesai' => '2025-01-05', 'kapasitas' => 15],
            ['pengguna_id' => 3, 'judul' => 'Kursus Desain Grafis', 'deskripsi' => 'Pelajari desain grafis dengan Adobe Illustrator', 'jadwal' => '2024-12-10 10:00:00', 'harga' => 600000, 'tingkat_kesulitan' => 'Sedang', 'rating' => 4.2, 'status' => 'Aktif', 'tgl_mulai' => '2024-12-10', 'tgl_selesai' => '2025-01-10', 'kapasitas' => 10],
            ['pengguna_id' => 4, 'judul' => 'Kursus Pemrograman Python', 'deskripsi' => 'Dasar-dasar pemrograman dengan Python', 'jadwal' => '2024-12-15 10:00:00', 'harga' => 550000, 'tingkat_kesulitan' => 'Mudah', 'rating' => 4.0, 'status' => 'Aktif', 'tgl_mulai' => '2024-12-15', 'tgl_selesai' => '2025-01-15', 'kapasitas' => 25],
            ['pengguna_id' => 5, 'judul' => 'Kursus Manajemen Proyek', 'deskripsi' => 'Pelajari dasar-dasar manajemen proyek', 'jadwal' => '2024-12-20 10:00:00', 'harga' => 800000, 'tingkat_kesulitan' => 'Sulit', 'rating' => 4.7, 'status' => 'Aktif', 'tgl_mulai' => '2024-12-20', 'tgl_selesai' => '2025-01-20', 'kapasitas' => 30],
        ]);
    }
}
