<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengelolaanPelatihanController extends Controller
{
    public function pengelolaanPelatihan()
    {
        return view('pelatih/PengelolaanPelatihan', [
        ]);
    }
    public function pengelolaanPelatihanDetail()
    {
        return view('pelatih/PengelolaanPelatihanDetail', [
        ]);
    }
}
