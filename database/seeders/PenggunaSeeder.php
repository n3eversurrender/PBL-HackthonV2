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
            ['nama' => 'Budi', 'email' => 'budi@example.com', 'no_telepon' => '08123456788', 'alamat' => 'Bandung', 'jenis_kelamin' => 'Laki-laki', 'kata_sandi' => bcrypt('password'), 'foto_profil' => null, 'peran' => 'Pelatih'],
            ['nama' => 'Cindy', 'email' => 'cindy@example.com', 'no_telepon' => '08123456787', 'alamat' => 'Surabaya', 'jenis_kelamin' => 'Perempuan', 'kata_sandi' => bcrypt('password'), 'foto_profil' => null, 'peran' => 'Pelatih'],
            ['nama' => 'Dewi', 'email' => 'dewi@example.com', 'no_telepon' => '08123456786', 'alamat' => 'Yogyakarta', 'jenis_kelamin' => 'Perempuan', 'kata_sandi' => bcrypt('password'), 'foto_profil' => null, 'peran' => 'Peserta'],
            ['nama' => 'Eko', 'email' => 'eko@example.com', 'no_telepon' => '08123456785', 'alamat' => 'Semarang', 'jenis_kelamin' => 'Laki-laki', 'kata_sandi' => bcrypt('password'), 'foto_profil' => null, 'peran' => 'Peserta'],
            ['nama' => 'Fani', 'email' => 'fani@example.com', 'no_telepon' => '08123456784', 'alamat' => 'Medan', 'jenis_kelamin' => 'Perempuan', 'kata_sandi' => bcrypt('password'), 'foto_profil' => null, 'peran' => 'Peserta'],
            ['nama' => 'Gilang', 'email' => 'gilang@example.com', 'no_telepon' => '08123456783', 'alamat' => 'Makassar', 'jenis_kelamin' => 'Laki-laki', 'kata_sandi' => bcrypt('password'), 'foto_profil' => null, 'peran' => 'Peserta'],
            ['nama' => 'Hanna', 'email' => 'hanna@example.com', 'no_telepon' => '08123456782', 'alamat' => 'Denpasar', 'jenis_kelamin' => 'Perempuan', 'kata_sandi' => bcrypt('password'), 'foto_profil' => null, 'peran' => 'Peserta'],
            ['nama' => 'Irwan', 'email' => 'irwan@example.com', 'no_telepon' => '08123456781', 'alamat' => 'Malang', 'jenis_kelamin' => 'Laki-laki', 'kata_sandi' => bcrypt('password'), 'foto_profil' => null, 'peran' => 'Peserta'],
            ['nama' => 'Joko', 'email' => 'joko@example.com', 'no_telepon' => '08123456780', 'alamat' => 'Bali', 'jenis_kelamin' => 'Laki-laki', 'kata_sandi' => bcrypt('password'), 'foto_profil' => null, 'peran' => 'Peserta'],
            ['nama' => 'Karin', 'email' => 'karin@example.com', 'no_telepon' => '08123456779', 'alamat' => 'Solo', 'jenis_kelamin' => 'Perempuan', 'kata_sandi' => bcrypt('password'), 'foto_profil' => null, 'peran' => 'Peserta'],
            ['nama' => 'Lina', 'email' => 'lina@example.com', 'no_telepon' => '08123456778', 'alamat' => 'Palembang', 'jenis_kelamin' => 'Perempuan', 'kata_sandi' => bcrypt('password'), 'foto_profil' => null, 'peran' => 'Peserta'],
            ['nama' => 'Mira', 'email' => 'mira@example.com', 'no_telepon' => '08123456777', 'alamat' => 'Bandung', 'jenis_kelamin' => 'Perempuan', 'kata_sandi' => bcrypt('password'), 'foto_profil' => null, 'peran' => 'Peserta'],
            ['nama' => 'Nadia', 'email' => 'nadia@example.com', 'no_telepon' => '08123456776', 'alamat' => 'Surabaya', 'jenis_kelamin' => 'Perempuan', 'kata_sandi' => bcrypt('password'), 'foto_profil' => null, 'peran' => 'Peserta'],
            ['nama' => 'Oscar', 'email' => 'oscar@example.com', 'no_telepon' => '08123456775', 'alamat' => 'Yogyakarta', 'jenis_kelamin' => 'Laki-laki', 'kata_sandi' => bcrypt('password'), 'foto_profil' => null, 'peran' => 'Peserta'],
        ]);
    }
}
