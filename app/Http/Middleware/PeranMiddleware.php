<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PeranMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $peran
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $role)
    {
        // Cek apakah pengguna sudah login dan peran yang dipilih
        if (Auth::check()) {
            $user = Auth::user();

            // Misalnya, periksa jika peran yang dipilih sesuai dengan peran pengguna
            if ($role == 'pelatih' && $user->peran == 'Pelatih') {
                return $next($request);
            } elseif ($role == 'peserta' && $user->peran == 'Peserta') {
                return $next($request);
            }

            // Jika peran tidak sesuai, arahkan ke halaman yang sesuai atau ke halaman error
            return redirect()->route('home')->withErrors(['peran' => 'Akses ditolak, peran tidak sesuai.']);
        }

        // Jika pengguna belum login, arahkan ke halaman login
        return redirect()->route('login');
    }
}
