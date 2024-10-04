<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PesertaKursusController extends Controller
{
    public function Peserta_Kursus()
    {
        return view('Admin/PesertaKursus', [
        ]);
    }
}
