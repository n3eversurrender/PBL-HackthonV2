<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TambahKurikulumController extends Controller
{
    public function Tambah_Kurikulum()
    {
        return view('pelatih/TambahKurikulum', [
        ]);
    }
}
