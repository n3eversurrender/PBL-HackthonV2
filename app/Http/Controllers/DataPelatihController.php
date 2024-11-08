<?php

namespace App\Http\Controllers;

use App\Models\Kursus;
use Illuminate\Http\Request;

class DaftarPelatihanController extends Controller
{
    public function daftarPelatihan()
    {
        // Ambil kursus dengan pengguna yang perannya Pelatih (jika ada)
        $kursus = Kursus::with(['pengguna' => function ($query) {
            $query->where('peran', 'Pelatih');
        }, 'pendaftaran'])->get();

        // Menambahkan kondisi untuk memastikan pengguna tetap ada meskipun tidak ada pelatih
        foreach ($kursus as $kursusItem) {
            if ($kursusItem->pengguna === null) {
                $kursusItem->pengguna = null; // Jika tidak ada pelatih, set pengguna ke null
            }
        }

        return view('peserta.DaftarPelatihan', [
            'kursus' => $kursus,
        ]);
    }
}