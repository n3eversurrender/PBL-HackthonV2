<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TambahKursusController extends Controller
{
    public function Tambah_Kursus()
    {
        return view('pelatih/TambahKursus', [
        ]);
    }
    public function Edit_Kursus()
    {
        return view('pelatih/EditKursus', [
        ]);
    }
}
