<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengelolaanSertifikatController extends Controller
{
    public function Pengelolaan_Sertifikat()
    {
        return view('pelatih/PengelolaanSertifikat', [
        ]);
    }
}
