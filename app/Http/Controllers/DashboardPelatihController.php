<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardPelatihController extends Controller
{
    public function Dashboard_Pelatih()
    {
        return view('pelatih/DashboardPelatih', [
        ]);
    }
}
