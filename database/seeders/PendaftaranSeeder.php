<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PendaftaranSeeder extends Seeder
{
    public function run()
    {
        DB::table('pendaftaran')->insert([
            ['pengguna_id' => 3, 'kursus_id' => 1, 'peserta_id' => 2, 'tgl_pendaftaran' => '2024-11-01', 'status_pendaftaran' => 'Aktif', 'status_pembayaran' => 'Berhasil'],
            ['pengguna_id' => 4, 'kursus_id' => 2, 'peserta_id' => 3, 'tgl_pendaftaran' => '2024-11-02', 'status_pendaftaran' => 'Aktif', 'status_pembayaran' => 'Berhasil'],
            ['pengguna_id' => 5, 'kursus_id' => 3, 'peserta_id' => 4, 'tgl_pendaftaran' => '2024-11-03', 'status_pendaftaran' => 'Aktif', 'status_pembayaran' => 'Berhasil'],
            ['pengguna_id' => 6, 'kursus_id' => 4, 'peserta_id' => 1, 'tgl_pendaftaran' => '2024-11-04', 'status_pendaftaran' => 'Aktif', 'status_pembayaran' => 'Berhasil'],
            ['pengguna_id' => 6, 'kursus_id' => 5, 'peserta_id' => 5, 'tgl_pendaftaran' => '2024-11-05', 'status_pendaftaran' => 'Aktif', 'status_pembayaran' => 'Berhasil'],
            ['pengguna_id' => 8, 'kursus_id' => 6, 'peserta_id' => 2, 'tgl_pendaftaran' => '2024-11-01', 'status_pendaftaran' => 'Aktif', 'status_pembayaran' => 'Berhasil'],
            ['pengguna_id' => 9, 'kursus_id' => 7, 'peserta_id' => 3, 'tgl_pendaftaran' => '2024-11-02', 'status_pendaftaran' => 'Aktif', 'status_pembayaran' => 'Berhasil'],
            ['pengguna_id' => 9, 'kursus_id' => 8, 'peserta_id' => 4, 'tgl_pendaftaran' => '2024-11-03', 'status_pendaftaran' => 'Aktif', 'status_pembayaran' => 'Berhasil'],
            ['pengguna_id' => 7, 'kursus_id' => 9, 'peserta_id' => 1, 'tgl_pendaftaran' => '2024-11-04', 'status_pendaftaran' => 'Aktif', 'status_pembayaran' => 'Berhasil'],
            ['pengguna_id' => 4, 'kursus_id' => 1, 'peserta_id' => 5, 'tgl_pendaftaran' => '2024-11-05', 'status_pendaftaran' => 'Aktif', 'status_pembayaran' => 'Berhasil'],
            ['pengguna_id' => 5, 'kursus_id' => 1, 'peserta_id' => 2, 'tgl_pendaftaran' => '2024-11-01', 'status_pendaftaran' => 'Aktif', 'status_pembayaran' => 'Berhasil'],
            ['pengguna_id' => 6, 'kursus_id' => 1, 'peserta_id' => 3, 'tgl_pendaftaran' => '2024-11-02', 'status_pendaftaran' => 'Aktif', 'status_pembayaran' => 'Berhasil'],
            ['pengguna_id' => 3, 'kursus_id' => 1, 'peserta_id' => 4, 'tgl_pendaftaran' => '2024-11-03', 'status_pendaftaran' => 'Aktif', 'status_pembayaran' => 'Berhasil'],
            ['pengguna_id' => 1, 'kursus_id' => 1, 'peserta_id' => 1, 'tgl_pendaftaran' => '2024-11-04', 'status_pendaftaran' => 'Aktif', 'status_pembayaran' => 'Berhasil'],
            ['pengguna_id' => 1, 'kursus_id' => 1, 'peserta_id' => 5, 'tgl_pendaftaran' => '2024-11-05', 'status_pendaftaran' => 'Aktif', 'status_pembayaran' => 'Berhasil'],
        ]);
    }
}
