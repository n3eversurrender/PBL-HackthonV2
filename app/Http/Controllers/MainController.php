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
    public function Main_Login()
    {
        return view('layouts/mainLogin', [
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
    
    public function Course_Page()
    {
        return view('guest/CoursePage', [
        ]);
    }

    public function Payment_Page()
    {
        return view('guest/PaymentPage', [
        ]);
    }


}