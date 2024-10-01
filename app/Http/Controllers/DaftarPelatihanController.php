<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DaftarPelatihanController extends Controller
{
    public function Daftar_Pelatihan()
    {
        return view('guest/DaftarPelatihan', []);
    }
}
