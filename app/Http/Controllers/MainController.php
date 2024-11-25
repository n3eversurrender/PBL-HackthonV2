<?php

namespace App\Http\Controllers;

use App\Models\Kursus;
use App\Models\UmpanBalik;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function Main()
    {
        return view('layouts/main', []);
    }
    public function mainPeserta()
    {
        return view('layouts/mainPeserta', []);
    }
    public function mainPelatih()
    {
        return view('layouts/mainPelatih', []);
    }

    public function Home()
    {
        // Ambil maksimal 4 data dari tabel 'umpan_balik'
        $data = UmpanBalik::take(3)->get();

        // Kirim data ke view
        return view('guest.Home', compact('data'));
    }

    public function daftarKursus()
    {
        $kursus = Kursus::all(); // Mengambil semua data dari tabel 'kursus'
        return view('guest/DaftarKursus', ['kursus' => $kursus]);
    }

    public function tentangKami()
    {
        return view('guest/TentangKami', []);
    }

    public function coursePage()
    {
        return view('guest/CoursePage', []);
    }

    public function paymentPage()
    {
        return view('guest/PaymentPage', []);
    }
}
