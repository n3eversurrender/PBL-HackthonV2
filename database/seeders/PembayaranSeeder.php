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
        ]);
    }
}
