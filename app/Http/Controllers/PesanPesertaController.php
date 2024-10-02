<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PesanPesertaController extends Controller
{
    public function Pesan_Peserta()
    {
        return view('peserta/PesanPeserta', [
        ]);
    }
}
