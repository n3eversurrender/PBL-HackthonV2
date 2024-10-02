<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PesanPelatihController extends Controller
{
    public function Pesan_Pelatih()
    {
        return view('pelatih/pesanPelatih', [
        ]);
    }
}
