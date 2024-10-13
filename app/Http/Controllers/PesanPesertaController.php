<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PesanPesertaController extends Controller
{
    public function pesanPeserta()
    {
        return view('peserta/PesanPeserta', [
        ]);
    }
}
