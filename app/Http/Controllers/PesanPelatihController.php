<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PesanPelatihController extends Controller
{
    public function pesanPelatih()
    {
        return view('pelatih/pesanPelatih', [
        ]);
    }
}
