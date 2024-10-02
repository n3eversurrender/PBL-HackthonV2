<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KursusController extends Controller
{
    public function Kursus()
    {
        return view('peserta/Kursus', [
        ]);
    }
    public function Kursus_Modul()
    {
        return view('peserta/KursusModul', [
        ]);
    }
    public function Kursus_Materi()
    {
        return view('peserta/KursusMateri', [
        ]);
    }
}
