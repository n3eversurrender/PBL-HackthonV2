<?php

namespace App\Http\Controllers;

use App\Models\Kursus;
use App\Models\Pendaftaran;
use App\Models\Pengguna;
use Illuminate\Http\Request;


class PengelolaanPelatihanController extends Controller
{
    public function pengelolaanPelatihan()
    {
        $kursus = Kursus::all();

        return view('pelatih.PengelolaanPelatihan', [
            'kursus' => $kursus,
        ]);
    }

    public function pengelolaanPelatihanDetail($kursus_id)
    {
        // Ambil kursus berdasarkan kursus_id yang diterima di URL
        $kursus = Kursus::find($kursus_id);

        // Pastikan kursus ditemukan
        if (!$kursus) {
            return redirect()->route('kursus.index'); // Redirect jika kursus tidak ditemukan
        }

        // Ambil pengguna yang terdaftar di kursus ini
        $pengguna = Pengguna::whereHas('pendaftaran', function ($query) use ($kursus_id) {
            $query->where('kursus_id', $kursus_id);
        })->get();

        // Ambil status pendaftaran untuk pengguna yang terdaftar di kursus ini
        $pendaftaran = Pendaftaran::where('kursus_id', $kursus_id)
            ->whereIn('pengguna_id', $pengguna->pluck('pengguna_id'))
            ->get();

        // Kirim data ke view
        return view('pelatih.PengelolaanPelatihanDetail', compact('kursus', 'pengguna', 'pendaftaran'));
    }
}