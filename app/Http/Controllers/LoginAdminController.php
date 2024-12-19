<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class LoginAdminController extends Controller
{
    // Menampilkan halaman login
    public function loginAdmin()
    {
        return view('Admin/LoginAdmin'); // Pastikan Anda memiliki file 'login_admin.blade.php'
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/LoginAdmin')->with('success', 'Logout berhasil!');;
    }

    // Memproses form login
    public function processLogin(Request $request)
    {

        // Validasi input
        $validated = $request->validate([
            'username' => 'required|string',
            'kata_sandi' => 'required|string',
        ], [
            'username.required' => 'Nama Pengguna wajib diisi.',
            'kata_sandi.required'=> 'Kata sandi wajib diisi.',
        ]);

        // Mencari admin berdasarkan username
        $admin = Admin::where('username', $validated['username'])->first();

        // Mengecek apakah admin ditemukan dan password cocok
        if ($admin && Hash::check($validated['kata_sandi'], $admin->kata_sandi)) {
            // Login berhasil, arahkan ke dashboard atau halaman admin
            Auth::login($admin); // Menggunakan Laravel Auth untuk login
            return redirect()->route('dashboard')->with('success', 'Berhasil login sebagai Admin!'); // Ganti dengan rute dashboard Anda
        } else {
            // Login gagal, kembali ke halaman login dengan pesan kesalahan
            return back()->withErrors([
                'login_error' => 'Nama Pengguna atau kata sandi salah.',
            ]);
        }
    }
}
