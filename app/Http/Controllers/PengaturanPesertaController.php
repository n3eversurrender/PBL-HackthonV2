<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengaturanPesertaController extends Controller
{
    public function Pengaturan_Peserta()
    {
        return view('peserta/PengaturanPeserta', [
        ]);
    }
}
