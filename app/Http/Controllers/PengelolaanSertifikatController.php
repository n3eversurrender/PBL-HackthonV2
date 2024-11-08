<?php

namespace App\Http\Controllers;

use App\Models\Sertifikat;
use Illuminate\Http\Request;


class PengelolaanSertifikatController extends Controller
{
    public function pengelolaanSertifikat()
    {
        
        $sertifikat = Sertifikat::all();
        
        return view('pelatih.PengelolaanSertifikat', [
            'sertifikat' => $sertifikat
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
