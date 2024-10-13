<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TambahKursusController extends Controller
{
    public function tambahKursus()
    {
        return view('pelatih/TambahKursus', [
        ]);
    }
    public function editKursus()
    {
        return view('pelatih/EditKursus', [
        ]);
    }
}
