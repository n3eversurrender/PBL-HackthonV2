<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengelolaanPelatihanController extends Controller
{
    public function Pengelolaan_Pelatihan()
    {
        return view('pelatih/PengelolaanPelatihan', [
        ]);
    }
    public function Pengelolaan_Pelatihan_Detail()
    {
        return view('pelatih/PengelolaanPelatihanDetail', [
        ]);
    }
}
