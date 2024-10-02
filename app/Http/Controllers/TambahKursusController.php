<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TambahKursusController extends Controller
{
    public function Tambah_Kurusu()
    {
        return view('pelatih/TambahKursus', [
        ]);
    }
}
