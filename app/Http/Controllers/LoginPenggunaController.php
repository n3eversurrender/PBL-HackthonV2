<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;

class LoginPenggunaController extends Controller
{

    public function login(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'email' => 'required|email',
            'kata_sandi' => 'required|string',
            'peran' => 'required|string|in:Pelatih,Peserta', // Validasi peran
        ]);

        // Mencari pengguna berdasarkan email
        $pengguna = Pengguna::where('email', $validated['email'])->first();

        // Mengecek apakah pengguna ditemukan dan password cocok
        if ($pengguna && Hash::check($validated['kata_sandi'], $pengguna->kata_sandi)) {
            // Login berhasil, arahkan ke dashboard atau halaman sesuai peran
            Log::info('Login berhasil', [
                'email' => $validated['email'],
                'peran' => $validated['peran'],
            ]);

            // Proses redirect berdasarkan peran
            if ($validated['peran'] === 'Pelatih') {
                return redirect()->route('DashboardPelatih');
            } elseif ($validated['peran'] === 'Peserta') {
                return redirect()->route('DashboardPeserta');
            } else {
                Log::warning('Peran tidak valid', [
                    'peran' => $validated['peran'],
                ]);
                return redirect()->route('home');
            }
        } else {
            // Login gagal, menambahkan log kesalahan
            Log::error('Login gagal', [
                'email' => $validated['email'],
            ]);

            // Mengirim pesan error ke form login
            return back()->withErrors([
                'login_error' => 'Email atau kata sandi salah.',
            ]);
        }
    }
}
