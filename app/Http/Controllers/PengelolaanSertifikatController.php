<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengelolaanSertifikatController extends Controller
{
    public function pengelolaanSertifikat()
    {
        return view('pelatih/PengelolaanSertifikat', [
        ]);
    }
    public function tambahSertifikat()
    {
        return view('pelatih/TambahSertifikat', [
        ]);
    }
    public function editSertifikat()
    {
        return view('pelatih/EditSertifikat', [
        ]);
    }
}
