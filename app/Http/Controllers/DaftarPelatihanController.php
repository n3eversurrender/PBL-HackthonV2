<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DaftarPelatihanController extends Controller
{
    public function daftarPelatihan()
    {
        return view('peserta/DaftarPelatihan', [
            
        ]);
    }
}
