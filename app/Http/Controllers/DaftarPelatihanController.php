<?php

namespace App\Http\Controllers;

use App\Models\Kursus;
use Illuminate\Support\Facades\Auth;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;

class DaftarPelatihanController extends Controller
{
    public function daftarPelatihan()
    {
        $id = Auth::id(); // Ambil ID pengguna yang sedang login

        // Ambil pendaftaran yang terkait dengan pengguna yang sedang login
        $pendaftaran = Pendaftaran::with(['kursus.pengguna']) // Memuat relasi kursus dan pengguna (pelatih)
            ->where('pengguna_id', $id) // Filter berdasarkan peserta yang login
            ->paginate(10); // Paginate dengan ukuran 10 per halaman

        return view('peserta.DaftarPelatihan', [
            'pendaftaran' => $pendaftaran,
        ]);
    }


    public function destroy($pendaftaran_id)
    {
        // Temukan pendaftaran berdasarkan pendaftaran_id dan hapus
        $pendaftaran = Pendaftaran::findOrFail($pendaftaran_id);
        $pendaftaran->delete();

        // Redirect kembali dengan pesan sukses
        return back()->with('success', 'Pendaftaran berhasil dihapus.');
    }
}
