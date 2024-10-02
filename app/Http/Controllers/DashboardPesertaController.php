<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardPesertaController extends Controller
{
    public function Dashboard_Peserta()
    {
        return view('peserta/DashboardPeserta', [
        ]);
    }
}
