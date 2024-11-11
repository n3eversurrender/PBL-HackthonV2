<?php

namespace App\Http\Controllers;

use App\Models\Kursus;
use Illuminate\Http\Request;

class DaftarPelatihanController extends Controller
{
    public function daftarPelatihan()
    {
        // Ambil kursus dengan pengguna yang perannya Pelatih dan paginate
        $kursus = Kursus::with(['pengguna' => function ($query) {
            $query->where('peran', 'Pelatih');
        }, 'pendaftaran'])->paginate(10); // Paginate with a page size of 10

        return view('peserta.DaftarPelatihan', [
            'kursus' => $kursus,
        ]);
    }
}