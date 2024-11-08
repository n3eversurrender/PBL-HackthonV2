<?php

namespace App\Http\Controllers;

use App\Models\Kursus;
use Illuminate\Http\Request;

class PengelolaanKursusController extends Controller
{
    public function pengelolaanKursus()
    {
        $kursus = Kursus::all();
        
        return view('pelatih.PengelolaanKursus', [
            'kursus' => $kursus
        ]);
    }
}
