<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KursusSeeder extends Seeder
{
    public function run()
    {
        DB::table('kursus')->insert([
            ['pengguna_id' => 1, 'kategori_id' => 1, 'judul' => 'Kursus Bahasa Inggris Dasar', 'deskripsi' => 'Belajar Bahasa Inggris dari nol', 'harga' => 500000, 'tingkat_kesulitan' => 'Pemula', 'rating' => 4.5, 'status' => 'Aktif', 'tgl_mulai' => '2024-12-01', 'tgl_selesai' => '2024-12-31', 'kapasitas' => 20, 'lokasi' => 'Jakarta', 'foto_kursus' => null],
            ['pengguna_id' => 1, 'kategori_id' => 2, 'judul' => 'Kursus Public Speaking', 'deskripsi' => 'Tingkatkan kemampuan berbicara di depan umum', 'harga' => 750000, 'tingkat_kesulitan' => 'Menengah', 'rating' => 4.8, 'status' => 'Aktif', 'tgl_mulai' => '2024-12-05', 'tgl_selesai' => '2025-01-05', 'kapasitas' => 15, 'lokasi' => 'Bandung', 'foto_kursus' => null],
            ['pengguna_id' => 2, 'kategori_id' => 3, 'judul' => 'Kursus Desain Grafis', 'deskripsi' => 'Pelajari desain grafis dengan Adobe Illustrator', 'harga' => 600000, 'tingkat_kesulitan' => 'Menengah', 'rating' => 4.2, 'status' => 'Aktif', 'tgl_mulai' => '2024-12-10', 'tgl_selesai' => '2025-01-10', 'kapasitas' => 10, 'lokasi' => 'Yogyakarta', 'foto_kursus' => null],
            ['pengguna_id' => 2, 'kategori_id' => 4, 'judul' => 'Kursus Pemrograman Python', 'deskripsi' => 'Dasar-dasar pemrograman dengan Python', 'harga' => 550000, 'tingkat_kesulitan' => 'Pemula', 'rating' => 4.0, 'status' => 'Aktif', 'tgl_mulai' => '2024-12-15', 'tgl_selesai' => '2025-01-15', 'kapasitas' => 25, 'lokasi' => 'Surabaya', 'foto_kursus' => null],
            ['pengguna_id' => 3, 'kategori_id' => 5, 'judul' => 'Kursus Manajemen Proyek', 'deskripsi' => 'Pelajari dasar-dasar manajemen proyek', 'harga' => 800000, 'tingkat_kesulitan' => 'Lanjutan', 'rating' => 4.7, 'status' => 'Aktif', 'tgl_mulai' => '2024-12-20', 'tgl_selesai' => '2025-01-20', 'kapasitas' => 30, 'lokasi' => 'Medan', 'foto_kursus' => null],
            ['pengguna_id' => 3, 'kategori_id' => 1, 'judul' => 'Kursus SEO Dasar', 'deskripsi' => 'Pelajari dasar SEO untuk meningkatkan ranking website', 'harga' => 450000, 'tingkat_kesulitan' => 'Pemula', 'rating' => 4.3, 'status' => 'Aktif', 'tgl_mulai' => '2024-12-25', 'tgl_selesai' => '2025-01-25', 'kapasitas' => 35, 'lokasi' => 'Palembang', 'foto_kursus' => null],
            ['pengguna_id' => 1, 'kategori_id' => 2, 'judul' => 'Kursus Manajemen Waktu', 'deskripsi' => 'Cara efektif mengatur waktu dalam kehidupan sehari-hari', 'harga' => 400000, 'tingkat_kesulitan' => 'Pemula', 'rating' => 4.0, 'status' => 'Aktif', 'tgl_mulai' => '2025-01-01', 'tgl_selesai' => '2025-01-31', 'kapasitas' => 40, 'lokasi' => 'Jakarta', 'foto_kursus' => null],
            ['pengguna_id' => 2, 'kategori_id' => 3, 'judul' => 'Kursus Digital Marketing', 'deskripsi' => 'Pelajari dasar-dasar digital marketing untuk bisnis', 'harga' => 700000, 'tingkat_kesulitan' => 'Menengah', 'rating' => 4.6, 'status' => 'Aktif', 'tgl_mulai' => '2025-01-05', 'tgl_selesai' => '2025-02-05', 'kapasitas' => 20, 'lokasi' => 'Bali', 'foto_kursus' => null],
            ['pengguna_id' => 1, 'kategori_id' => 4, 'judul' => 'Kursus Fotografi Dasar', 'deskripsi' => 'Belajar teknik dasar dalam fotografi', 'harga' => 550000, 'tingkat_kesulitan' => 'Pemula', 'rating' => 4.1, 'status' => 'Aktif', 'tgl_mulai' => '2025-01-10', 'tgl_selesai' => '2025-02-10', 'kapasitas' => 15, 'lokasi' => 'Jakarta', 'foto_kursus' => null],
            ['pengguna_id' => 3, 'kategori_id' => 5, 'judul' => 'Kursus Adobe Photoshop', 'deskripsi' => 'Pelajari teknik desain grafis menggunakan Photoshop', 'harga' => 650000, 'tingkat_kesulitan' => 'Menengah', 'rating' => 4.4, 'status' => 'Aktif', 'tgl_mulai' => '2025-01-15', 'tgl_selesai' => '2025-02-15', 'kapasitas' => 18, 'lokasi' => 'Bali', 'foto_kursus' => null],
            ['pengguna_id' => 2, 'kategori_id' => 4, 'judul' => 'Kursus Web Development', 'deskripsi' => 'Dasar-dasar pengembangan website menggunakan HTML, CSS, dan JavaScript', 'harga' => 700000, 'tingkat_kesulitan' => 'Pemula', 'rating' => 4.3, 'status' => 'Aktif', 'tgl_mulai' => '2025-01-20', 'tgl_selesai' => '2025-02-20', 'kapasitas' => 30, 'lokasi' => 'Surabaya', 'foto_kursus' => null],
            ['pengguna_id' => 1, 'kategori_id' => 2, 'judul' => 'Kursus Data Science', 'deskripsi' => 'Pelajari dasar-dasar data science dan analisis data', 'harga' => 800000, 'tingkat_kesulitan' => 'Lanjutan', 'rating' => 4.7, 'status' => 'Aktif', 'tgl_mulai' => '2025-02-01', 'tgl_selesai' => '2025-03-01', 'kapasitas' => 25, 'lokasi' => 'Jakarta', 'foto_kursus' => null],
            ['pengguna_id' => 3, 'kategori_id' => 5, 'judul' => 'Kursus Machine Learning', 'deskripsi' => 'Pelajari dasar-dasar machine learning dan penerapannya', 'harga' => 950000, 'tingkat_kesulitan' => 'Lanjutan', 'rating' => 4.9, 'status' => 'Aktif', 'tgl_mulai' => '2025-02-05', 'tgl_selesai' => '2025-03-05', 'kapasitas' => 20, 'lokasi' => 'Bali', 'foto_kursus' => null],
            ['pengguna_id' => 1, 'kategori_id' => 3, 'judul' => 'Kursus Keuangan Pribadi', 'deskripsi' => 'Pelajari cara mengelola keuangan pribadi secara bijak', 'harga' => 550000, 'tingkat_kesulitan' => 'Pemula', 'rating' => 4.6, 'status' => 'Aktif', 'tgl_mulai' => '2025-02-10', 'tgl_selesai' => '2025-03-10', 'kapasitas' => 40, 'lokasi' => 'Jakarta', 'foto_kursus' => null],
            ['pengguna_id' => 2, 'kategori_id' => 5, 'judul' => 'Kursus Manajemen Risiko', 'deskripsi' => 'Pelajari dasar-dasar manajemen risiko dalam proyek', 'harga' => 850000, 'tingkat_kesulitan' => 'Menengah', 'rating' => 4.5, 'status' => 'Aktif', 'tgl_mulai' => '2025-02-15', 'tgl_selesai' => '2025-03-15', 'kapasitas' => 20, 'lokasi' => 'Surabaya', 'foto_kursus' => null],
        ]);
    }
}
