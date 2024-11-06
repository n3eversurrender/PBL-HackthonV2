<?php

namespace App\Http\Controllers;

use App\Models\Kurikulum;
use App\Models\Kursus;
use Illuminate\Http\Request;

class KursusController extends Controller
{
    public function Kursus()
    {
        // Fetch all kursus data
        $kursus = Kursus::all();

        return view('peserta.Kursus', [
            'kursus' => $kursus,
        ]);
    }
    public function kursusModul($id_kursus)
    {
        // Mengambil data kursus berdasarkan id_kursus
        $kursus = Kursus::findOrFail($id_kursus);

        // Mengambil data kurikulum yang berhubungan dengan kursus
        $kurikulum = Kurikulum::where('kursus_id', $id_kursus)->get();

        // Mengirimkan data kursus dan kurikulum ke view
        return view('peserta.KursusModul', compact('kursus', 'kurikulum'));
    }

    public function kursusMateri()
    {
        return view('peserta/KursusMateri', []);
    }
}
