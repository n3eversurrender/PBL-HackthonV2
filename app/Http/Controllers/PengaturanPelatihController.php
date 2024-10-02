<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengaturanPelatihController extends Controller
{
    public function Pengaturan_Pelatih()
    {
        return view('pelatih/PengaturanPelatih', []);
    }
}
