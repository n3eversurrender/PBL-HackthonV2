<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardPesertaController extends Controller
{
    public function dashboardPeserta()
    {
        return view('peserta/DashboardPeserta', [
        ]);
    }
}
