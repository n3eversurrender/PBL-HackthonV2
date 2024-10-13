<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardPelatihController extends Controller
{
    public function dashboardPelatih()
    {
        return view('pelatih/DashboardPelatih', [
        ]);
    }
}
