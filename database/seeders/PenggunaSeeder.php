<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenggunaSeeder extends Seeder
{
    public function run()
    {
        DB::table('pengguna')->insert([
            ['nama' => 'Andi', 'email' => 'andi@example.com', 'no_telepon' => '08123456789', 'alamat' => 'Jakarta', 'jenis_kelamin' => 'Laki-laki', 'kata_sandi' => bcrypt('password'), 'foto_profil' => null, 'peran' => 'Pelatih'],
            ['nama' => 'Budi', 'email' => 'budi@example.com', 'no_telepon' => '08123456788', 'alamat' => 'Bandung', 'jenis_kelamin' => 'Laki-laki', 'kata_sandi' => bcrypt('password'), 'foto_profil' => null, 'peran' => 'Peserta'],
            ['nama' => 'Cindy', 'email' => 'cindy@example.com', 'no_telepon' => '08123456787', 'alamat' => 'Surabaya', 'jenis_kelamin' => 'Perempuan', 'kata_sandi' => bcrypt('password'), 'foto_profil' => null, 'peran' => 'Peserta'],
            ['nama' => 'Dewi', 'email' => 'dewi@example.com', 'no_telepon' => '08123456786', 'alamat' => 'Yogyakarta', 'jenis_kelamin' => 'Perempuan', 'kata_sandi' => bcrypt('password'), 'foto_profil' => null, 'peran' => 'Pelatih'],
            ['nama' => 'Eko', 'email' => 'eko@example.com', 'no_telepon' => '08123456785', 'alamat' => 'Semarang', 'jenis_kelamin' => 'Laki-laki', 'kata_sandi' => bcrypt('password'), 'foto_profil' => null, 'peran' => 'Peserta'],
        ]);
    }
}
