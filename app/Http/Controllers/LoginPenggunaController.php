<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginPenggunaController extends Controller
{
    public function login(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'email' => 'required|string',
            'kata_sandi' => 'required|string',
        ]);

        // Mencari admin berdasarkan username
        $pengguna = Pengguna::where('email', $validated['email'])->first();

        // Mengecek apakah pengguna ditemukan dan password cocok
        if ($pengguna && Hash::check($validated['kata_sandi'], $pengguna->kata_sandi)) {
            // Login berhasil, arahkan ke dashboard atau halaman pengguna
            Auth::login($pengguna);
            if ($pengguna->peran === 'Pelatih') {
                return redirect()->route('DashboardPelatih');
            } elseif ($pengguna->peran === 'Peserta') {
                return redirect()->route('DashboardPeserta');
            }
        } else {
            // Login gagal, kembali ke halaman login dengan pesan kesalahan
            return back()->withErrors([
                'login_error' => 'Username atau kata sandi salah.',
            ]);
        }
    }

    public function logoutPeserta()
    {
        Auth::logout();
        return redirect('/Masuk');
    }
    
    public function logoutPelatih()
    {
        Auth::logout();
        return redirect('/Masuk');
    }
}
