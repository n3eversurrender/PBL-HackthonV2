<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengelolaanKursusController extends Controller
{
    public function Pengelolaan_Kursus()
    {
        return view('pelatih/PengelolaanKursus', [
        ]);
    }
}
