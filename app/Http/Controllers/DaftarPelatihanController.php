<?php

namespace App\Http\Controllers;

use App\Models\Kursus;
use Illuminate\Http\Request;

class DaftarPelatihanController extends Controller
{
    public function daftarPelatihan()
    {
        // Ambil kursus dengan pengguna yang perannya Pelatih
        $kursus = Kursus::with(['pengguna' => function ($query) {
            $query->where('peran', 'Pelatih');
        }, 'pendaftaran'])->get();

        return view('peserta.DaftarPelatihan', [
            'kursus' => $kursus,
        ]);
    }
}
