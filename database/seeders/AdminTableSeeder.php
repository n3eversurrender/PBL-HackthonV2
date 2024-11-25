<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('admin')->insert([
            [
                'username' => 'admin',
                'kata_sandi' => Hash::make('123123123'),
                'role' => 'admin'
            ],
            [
                'username' => 'admin2',
                'kata_sandi' => Hash::make('123123123'),
                'role' => 'admin'
            ],
            [
                'username' => 'admin3',
                'kata_sandi' => Hash::make('123123123'),
                'role' => 'superadmin'
            ],
            [
                'username' => 'admin4',
                'kata_sandi' => Hash::make('123123123'),
                'role' => 'admin'
            ],
            [
                'username' => 'admin5',
                'kata_sandi' => Hash::make('123123123'),
                'role' => 'superadmin'
            ],
        ]);
    }
}
