<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengaturanPelatihController extends Controller
{
    public function pengaturanPelatih()
    {
        return view('pelatih/PengaturanPelatih', []);
    }
}
