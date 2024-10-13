<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengelolaanKursusController extends Controller
{
    public function pengelolaanKursus()
    {
        return view('pelatih/PengelolaanKursus', [
        ]);
    }
}
