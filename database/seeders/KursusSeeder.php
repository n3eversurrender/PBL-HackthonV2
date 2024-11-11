<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KursusSeeder extends Seeder
{
    public function run()
    {
        DB::table('kursus')->insert([
            ['pengguna_id' => 1, 'judul' => 'Kursus Bahasa Inggris Dasar', 'deskripsi' => 'Belajar Bahasa Inggris dari nol', 'jadwal' => '2024-12-01 10:00:00', 'harga' => 500000, 'tingkat_kesulitan' => 'Pemula', 'rating' => 4.5, 'status' => 'Aktif', 'tgl_mulai' => '2024-12-01', 'tgl_selesai' => '2024-12-31', 'kapasitas' => 20, 'foto_kursus' => null],
            ['pengguna_id' => 1, 'judul' => 'Kursus Public Speaking', 'deskripsi' => 'Tingkatkan kemampuan berbicara di depan umum', 'jadwal' => '2024-12-05 10:00:00', 'harga' => 750000, 'tingkat_kesulitan' => 'Menengah', 'rating' => 4.8, 'status' => 'Aktif', 'tgl_mulai' => '2024-12-05', 'tgl_selesai' => '2025-01-05', 'kapasitas' => 15, 'foto_kursus' => null],
            ['pengguna_id' => 2, 'judul' => 'Kursus Desain Grafis', 'deskripsi' => 'Pelajari desain grafis dengan Adobe Illustrator', 'jadwal' => '2024-12-10 10:00:00', 'harga' => 600000, 'tingkat_kesulitan' => 'Menengah', 'rating' => 4.2, 'status' => 'Aktif', 'tgl_mulai' => '2024-12-10', 'tgl_selesai' => '2025-01-10', 'kapasitas' => 10, 'foto_kursus' => null],
            ['pengguna_id' => 2, 'judul' => 'Kursus Pemrograman Python', 'deskripsi' => 'Dasar-dasar pemrograman dengan Python', 'jadwal' => '2024-12-15 10:00:00', 'harga' => 550000, 'tingkat_kesulitan' => 'Pemula', 'rating' => 4.0, 'status' => 'Aktif', 'tgl_mulai' => '2024-12-15', 'tgl_selesai' => '2025-01-15', 'kapasitas' => 25, 'foto_kursus' => null],
            ['pengguna_id' => 3, 'judul' => 'Kursus Manajemen Proyek', 'deskripsi' => 'Pelajari dasar-dasar manajemen proyek', 'jadwal' => '2024-12-20 10:00:00', 'harga' => 800000, 'tingkat_kesulitan' => 'Lanjutan', 'rating' => 4.7, 'status' => 'Aktif', 'tgl_mulai' => '2024-12-20', 'tgl_selesai' => '2025-01-20', 'kapasitas' => 30, 'foto_kursus' => null],
            ['pengguna_id' => 3, 'judul' => 'Kursus SEO Dasar', 'deskripsi' => 'Pelajari dasar SEO untuk meningkatkan ranking website', 'jadwal' => '2024-12-25 10:00:00', 'harga' => 450000, 'tingkat_kesulitan' => 'Pemula', 'rating' => 4.3, 'status' => 'Aktif', 'tgl_mulai' => '2024-12-25', 'tgl_selesai' => '2025-01-25', 'kapasitas' => 35, 'foto_kursus' => null],
            ['pengguna_id' => 1, 'judul' => 'Kursus Manajemen Waktu', 'deskripsi' => 'Cara efektif mengatur waktu dalam kehidupan sehari-hari', 'jadwal' => '2025-01-01 10:00:00', 'harga' => 400000, 'tingkat_kesulitan' => 'Pemula', 'rating' => 4.0, 'status' => 'Aktif', 'tgl_mulai' => '2025-01-01', 'tgl_selesai' => '2025-01-31', 'kapasitas' => 40, 'foto_kursus' => null],
            ['pengguna_id' => 2, 'judul' => 'Kursus Digital Marketing', 'deskripsi' => 'Pelajari dasar-dasar digital marketing untuk bisnis', 'jadwal' => '2025-01-05 10:00:00', 'harga' => 700000, 'tingkat_kesulitan' => 'Menengah', 'rating' => 4.6, 'status' => 'Aktif', 'tgl_mulai' => '2025-01-05', 'tgl_selesai' => '2025-02-05', 'kapasitas' => 20, 'foto_kursus' => null],
            ['pengguna_id' => 1, 'judul' => 'Kursus Fotografi Dasar', 'deskripsi' => 'Belajar teknik dasar dalam fotografi', 'jadwal' => '2025-01-10 10:00:00', 'harga' => 550000, 'tingkat_kesulitan' => 'Pemula', 'rating' => 4.1, 'status' => 'Aktif', 'tgl_mulai' => '2025-01-10', 'tgl_selesai' => '2025-02-10', 'kapasitas' => 15, 'foto_kursus' => null],
            ['pengguna_id' => 3, 'judul' => 'Kursus Adobe Photoshop', 'deskripsi' => 'Pelajari teknik desain grafis menggunakan Photoshop', 'jadwal' => '2025-01-15 10:00:00', 'harga' => 650000, 'tingkat_kesulitan' => 'Menengah', 'rating' => 4.4, 'status' => 'Aktif', 'tgl_mulai' => '2025-01-15', 'tgl_selesai' => '2025-02-15', 'kapasitas' => 18, 'foto_kursus' => null],
            ['pengguna_id' => 2, 'judul' => 'Kursus Web Development', 'deskripsi' => 'Dasar-dasar pengembangan website menggunakan HTML, CSS, dan JavaScript', 'jadwal' => '2025-01-20 10:00:00', 'harga' => 700000, 'tingkat_kesulitan' => 'Pemula', 'rating' => 4.3, 'status' => 'Aktif', 'tgl_mulai' => '2025-01-20', 'tgl_selesai' => '2025-02-20', 'kapasitas' => 30, 'foto_kursus' => null],
            ['pengguna_id' => 1, 'judul' => 'Kursus Data Science', 'deskripsi' => 'Pelajari dasar-dasar data science dan analisis data', 'jadwal' => '2025-02-01 10:00:00', 'harga' => 800000, 'tingkat_kesulitan' => 'Lanjutan', 'rating' => 4.7, 'status' => 'Aktif', 'tgl_mulai' => '2025-02-01', 'tgl_selesai' => '2025-03-01', 'kapasitas' => 25, 'foto_kursus' => null],
            ['pengguna_id' => 3, 'judul' => 'Kursus Machine Learning', 'deskripsi' => 'Pelajari dasar-dasar machine learning dan penerapannya', 'jadwal' => '2025-02-05 10:00:00', 'harga' => 950000, 'tingkat_kesulitan' => 'Lanjutan', 'rating' => 4.9, 'status' => 'Aktif', 'tgl_mulai' => '2025-02-05', 'tgl_selesai' => '2025-03-05', 'kapasitas' => 20, 'foto_kursus' => null],
            ['pengguna_id' => 1, 'judul' => 'Kursus Keuangan Pribadi', 'deskripsi' => 'Pelajari cara mengelola keuangan pribadi secara bijak', 'jadwal' => '2025-02-10 10:00:00', 'harga' => 550000, 'tingkat_kesulitan' => 'Pemula', 'rating' => 4.6, 'status' => 'Aktif', 'tgl_mulai' => '2025-02-10', 'tgl_selesai' => '2025-03-10', 'kapasitas' => 40, 'foto_kursus' => null],
            ['pengguna_id' => 2, 'judul' => 'Kursus Manajemen Risiko', 'deskripsi' => 'Pelajari dasar-dasar manajemen risiko dalam proyek', 'jadwal' => '2025-02-15 10:00:00', 'harga' => 850000, 'tingkat_kesulitan' => 'Menengah', 'rating' => 4.5, 'status' => 'Aktif', 'tgl_mulai' => '2025-02-15', 'tgl_selesai' => '2025-03-15', 'kapasitas' => 20, 'foto_kursus' => null],
        ]);
    }
}
