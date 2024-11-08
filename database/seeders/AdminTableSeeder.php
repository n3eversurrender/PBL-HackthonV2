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
            ['username' => 'admin1', 'kata_sandi' => Hash::make('password1')],
            ['username' => 'admin2', 'kata_sandi' => Hash::make('password2')],
            ['username' => 'admin3', 'kata_sandi' => Hash::make('password3')],
            ['username' => 'admin4', 'kata_sandi' => Hash::make('password4')],
            ['username' => 'admin5', 'kata_sandi' => Hash::make('password5')],
        ]);
    }
}
