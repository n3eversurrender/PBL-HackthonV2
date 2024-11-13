<?php

namespace App\Http\Controllers;

use App\Models\Kursus;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;

class DaftarPelatihanController extends Controller
{
    public function daftarPelatihan()
    {
        // Ambil pendaftaran dengan relasi ke kursus dan pengguna, filter berdasarkan peran 'Pelatih'
        $pendaftaran = Pendaftaran::with(['kursus', 'pengguna' => function ($query) {
            // Ambil pengguna dengan peran 'Pelatih'
            $query->where('peran', 'Pelatih');
        }])->paginate(10); // Paginate dengan ukuran 10 per halaman

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
