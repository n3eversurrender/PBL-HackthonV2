<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function Main()
    {
        return view('layouts/main', [
        ]);
    }
    public function Main_Peserta()
    {
        return view('layouts/mainPeserta', [
        ]);
    }
    public function Main_Pelatih()
    {
        return view('layouts/mainPelatih', [
        ]);
    }
    public function Home()
    {
        return view('guest/Home', [
        ]);
    }

    public function Daftar_Kursus()
    {
        return view('guest/DaftarKursus', [
        ]);
    }
    public function Tentang_Kami()
    {
        return view('guest/TentangKami', [
        ]);
    }
}