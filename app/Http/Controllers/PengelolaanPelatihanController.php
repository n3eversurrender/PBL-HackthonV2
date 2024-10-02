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
}
