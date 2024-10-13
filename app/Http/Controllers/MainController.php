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
    public function mainPeserta()
    {
        return view('layouts/mainPeserta', [
        ]);
    }
    public function mainPelatih()
    {
        return view('layouts/mainPelatih', [
        ]);
    }
    public function Home()
    {
        return view('guest/Home', [
        ]);
    }

    public function daftarKursus()
    {
        return view('guest/DaftarKursus', [
        ]);
    }
    public function tentangKami()
    {
        return view('guest/TentangKami', [
        ]);
    }
    
    public function coursePage()
    {
        return view('guest/CoursePage', [
        ]);
    }

    public function paymentPage()
    {
        return view('guest/PaymentPage', [
        ]);
    }


}