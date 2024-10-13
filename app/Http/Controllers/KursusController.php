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
    public function kursusModul()
    {
        return view('peserta/KursusModul', [
        ]);
    }
    public function kursusMateri()
    {
        return view('peserta/KursusMateri', [
        ]);
    }
}
