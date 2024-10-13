<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengaturanPesertaController extends Controller
{
    public function pengaturanPeserta()
    {
        return view('peserta/PengaturanPeserta', [
        ]);
    }
}
