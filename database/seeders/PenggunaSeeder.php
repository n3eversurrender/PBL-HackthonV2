<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenggunaSeeder extends Seeder
{
    public function run()
    {
        DB::table('pengguna')->insert([
            ['nama' => 'M Zaini Ridha', 'email' => 'zaini@gmail.com', 'no_telepon' => '08123456789', 'alamat' => 'Jakarta', 'jenis_kelamin' => 'Laki-laki', 'kata_sandi' => bcrypt('123123123'), 'foto_profil' => null, 'peran' => 'Pelatih', 'status' => 'Aktif'],
            ['nama' => 'Niati', 'email' => 'niati@gmail.com', 'no_telepon' => '08123456788', 'alamat' => 'Bandung', 'jenis_kelamin' => 'Perempuan', 'kata_sandi' => bcrypt('123123123'), 'foto_profil' => null, 'peran' => 'Pelatih', 'status' => 'Aktif'],
            ['nama' => 'Cindy', 'email' => 'cindy@example.com', 'no_telepon' => '08123456787', 'alamat' => 'Surabaya', 'jenis_kelamin' => 'Perempuan', 'kata_sandi' => bcrypt('password'), 'foto_profil' => null, 'peran' => 'Pelatih', 'status' => 'Aktif'],
            ['nama' => 'Dewi', 'email' => 'dewi@example.com', 'no_telepon' => '08123456786', 'alamat' => 'Yogyakarta', 'jenis_kelamin' => 'Perempuan', 'kata_sandi' => bcrypt('password'), 'foto_profil' => null, 'peran' => 'Peserta', 'status' => 'Aktif'],
            ['nama' => 'Ozed', 'email' => 'ozed@gmail.com', 'no_telepon' => '08123456785', 'alamat' => 'Semarang', 'jenis_kelamin' => 'Laki-laki', 'kata_sandi' => bcrypt('123123123'), 'foto_profil' => null, 'peran' => 'Peserta', 'status' => 'Aktif'],
            ['nama' => 'Liam', 'email' => 'liam@gmail.com', 'no_telepon' => '08123456784', 'alamat' => 'Medan', 'jenis_kelamin' => 'Perempuan', 'kata_sandi' => bcrypt('123123123'), 'foto_profil' => null, 'peran' => 'Peserta', 'status' => 'Aktif'],
            ['nama' => 'Gilang', 'email' => 'gilang@example.com', 'no_telepon' => '08123456783', 'alamat' => 'Makassar', 'jenis_kelamin' => 'Laki-laki', 'kata_sandi' => bcrypt('password'), 'foto_profil' => null, 'peran' => 'Peserta', 'status' => 'Aktif'],
            ['nama' => 'Hanna', 'email' => 'hanna@example.com', 'no_telepon' => '08123456782', 'alamat' => 'Denpasar', 'jenis_kelamin' => 'Perempuan', 'kata_sandi' => bcrypt('password'), 'foto_profil' => null, 'peran' => 'Peserta', 'status' => 'Aktif'],
            ['nama' => 'Irwan', 'email' => 'irwan@example.com', 'no_telepon' => '08123456781', 'alamat' => 'Malang', 'jenis_kelamin' => 'Laki-laki', 'kata_sandi' => bcrypt('password'), 'foto_profil' => null, 'peran' => 'Peserta', 'status' => 'Aktif'],
            ['nama' => 'Joko', 'email' => 'joko@example.com', 'no_telepon' => '08123456780', 'alamat' => 'Bali', 'jenis_kelamin' => 'Laki-laki', 'kata_sandi' => bcrypt('password'), 'foto_profil' => null, 'peran' => 'Peserta', 'status' => 'Aktif'],
            ['nama' => 'Karin', 'email' => 'karin@example.com', 'no_telepon' => '08123456779', 'alamat' => 'Solo', 'jenis_kelamin' => 'Perempuan', 'kata_sandi' => bcrypt('password'), 'foto_profil' => null, 'peran' => 'Peserta', 'status' => 'Aktif'],
            ['nama' => 'Lina', 'email' => 'lina@example.com', 'no_telepon' => '08123456778', 'alamat' => 'Palembang', 'jenis_kelamin' => 'Perempuan', 'kata_sandi' => bcrypt('password'), 'foto_profil' => null, 'peran' => 'Peserta', 'status' => 'Aktif'],
            ['nama' => 'Mira', 'email' => 'mira@example.com', 'no_telepon' => '08123456777', 'alamat' => 'Bandung', 'jenis_kelamin' => 'Perempuan', 'kata_sandi' => bcrypt('password'), 'foto_profil' => null, 'peran' => 'Peserta', 'status' => 'Aktif'],
            ['nama' => 'Nadia', 'email' => 'nadia@example.com', 'no_telepon' => '08123456776', 'alamat' => 'Surabaya', 'jenis_kelamin' => 'Perempuan', 'kata_sandi' => bcrypt('password'), 'foto_profil' => null, 'peran' => 'Peserta', 'status' => 'Aktif'],
            ['nama' => 'Oscar', 'email' => 'oscar@example.com', 'no_telepon' => '08123456775', 'alamat' => 'Yogyakarta', 'jenis_kelamin' => 'Laki-laki', 'kata_sandi' => bcrypt('password'), 'foto_profil' => null, 'peran' => 'Peserta', 'status' => 'Aktif'],
            ['nama' => 'Pandu', 'email' => 'pandu@example.com', 'no_telepon' => '08123456774', 'alamat' => 'Bekasi', 'jenis_kelamin' => 'Laki-laki', 'kata_sandi' => bcrypt('password'), 'foto_profil' => null, 'peran' => 'Pelatih', 'status' => 'Aktif'],
            ['nama' => 'Qori', 'email' => 'qori@example.com', 'no_telepon' => '08123456773', 'alamat' => 'Cirebon', 'jenis_kelamin' => 'Perempuan', 'kata_sandi' => bcrypt('password'), 'foto_profil' => null, 'peran' => 'Peserta', 'status' => 'Aktif'],
            ['nama' => 'Rafi', 'email' => 'rafi@example.com', 'no_telepon' => '08123456772', 'alamat' => 'Bogor', 'jenis_kelamin' => 'Laki-laki', 'kata_sandi' => bcrypt('password'), 'foto_profil' => null, 'peran' => 'Pelatih', 'status' => 'Aktif'],
            ['nama' => 'Siska', 'email' => 'siska@example.com', 'no_telepon' => '08123456771', 'alamat' => 'Depok', 'jenis_kelamin' => 'Perempuan', 'kata_sandi' => bcrypt('password'), 'foto_profil' => null, 'peran' => 'Peserta', 'status' => 'Aktif'],
            ['nama' => 'Taufik', 'email' => 'taufik@example.com', 'no_telepon' => '08123456770', 'alamat' => 'Tangerang', 'jenis_kelamin' => 'Laki-laki', 'kata_sandi' => bcrypt('password'), 'foto_profil' => null, 'peran' => 'Peserta', 'status' => 'Aktif'],
            ['nama' => 'Umar', 'email' => 'umar@example.com', 'no_telepon' => '08123456769', 'alamat' => 'Banten', 'jenis_kelamin' => 'Laki-laki', 'kata_sandi' => bcrypt('password'), 'foto_profil' => null, 'peran' => 'Peserta', 'status' => 'Aktif'],
            ['nama' => 'Vera', 'email' => 'vera@example.com', 'no_telepon' => '08123456768', 'alamat' => 'Ciamis', 'jenis_kelamin' => 'Perempuan', 'kata_sandi' => bcrypt('password'), 'foto_profil' => null, 'peran' => 'Pelatih', 'status' => 'Aktif'],
        ]);
    }
}