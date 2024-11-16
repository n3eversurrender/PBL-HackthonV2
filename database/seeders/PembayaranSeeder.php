<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PembayaranSeeder extends Seeder
{
    public function run()
    {
        DB::table('pembayaran')->insert([
            ['pendaftaran_id' => 1, 'tgl_pembayaran' => '2024-11-05', 'metode_pembayaran' => 'Transfer Bank', 'jumlah' => 500000, 'status' => 'Berhasil'],
            ['pendaftaran_id' => 2, 'tgl_pembayaran' => '2024-11-06', 'metode_pembayaran' => 'Kartu Kredit', 'jumlah' => 750000, 'status' => 'Berhasil'],
            ['pendaftaran_id' => 3, 'tgl_pembayaran' => '2024-11-07', 'metode_pembayaran' => 'Transfer Bank', 'jumlah' => 600000, 'status' => 'Berhasil'],
            ['pendaftaran_id' => 4, 'tgl_pembayaran' => '2024-11-08', 'metode_pembayaran' => 'Transfer Bank', 'jumlah' => 550000, 'status' => 'Berhasil'],
            ['pendaftaran_id' => 5, 'tgl_pembayaran' => '2024-11-09', 'metode_pembayaran' => 'Kartu Kredit', 'jumlah' => 800000, 'status' => 'Berhasil'],
            ['pendaftaran_id' => 6, 'tgl_pembayaran' => '2024-11-10', 'metode_pembayaran' => 'Transfer Bank', 'jumlah' => 450000, 'status' => 'Pending'],
            ['pendaftaran_id' => 7, 'tgl_pembayaran' => '2024-11-11', 'metode_pembayaran' => 'Kartu Kredit', 'jumlah' => 700000, 'status' => 'Pending'],
            ['pendaftaran_id' => 8, 'tgl_pembayaran' => '2024-11-12', 'metode_pembayaran' => 'Transfer Bank', 'jumlah' => 600000, 'status' => 'Pending'],
            ['pendaftaran_id' => 9, 'tgl_pembayaran' => '2024-11-13', 'metode_pembayaran' => 'Kartu Kredit', 'jumlah' => 850000, 'status' => 'Berhasil'],
            ['pendaftaran_id' => 10, 'tgl_pembayaran' => '2024-11-14', 'metode_pembayaran' => 'Transfer Bank', 'jumlah' => 650000, 'status' => 'Berhasil'],
            ['pendaftaran_id' => 11, 'tgl_pembayaran' => '2024-11-15', 'metode_pembayaran' => 'Kartu Kredit', 'jumlah' => 780000, 'status' => 'Berhasil'],
            ['pendaftaran_id' => 12, 'tgl_pembayaran' => '2024-11-16', 'metode_pembayaran' => 'Transfer Bank', 'jumlah' => 690000, 'status' => 'Pending'],
            ['pendaftaran_id' => 13, 'tgl_pembayaran' => '2024-11-17', 'metode_pembayaran' => 'Kartu Kredit', 'jumlah' => 800000, 'status' => 'Pending'],
            ['pendaftaran_id' => 14, 'tgl_pembayaran' => '2024-11-18', 'metode_pembayaran' => 'Transfer Bank', 'jumlah' => 750000, 'status' => 'Berhasil'],
            ['pendaftaran_id' => 15, 'tgl_pembayaran' => '2024-11-19', 'metode_pembayaran' => 'Kartu Kredit', 'jumlah' => 900000, 'status' => 'Berhasil'],
        ]);
    }
}
