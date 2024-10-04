<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailPesertaKursusController extends Controller
{
    public function Detail_Peserta_Kursus()
    {
        return view('Admin/DetailPesertaKursus', [
        ]);
    }
}
