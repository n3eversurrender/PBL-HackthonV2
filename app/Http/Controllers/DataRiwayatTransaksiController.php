<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataRiwayatTransaksiController extends Controller
{
    public function dataRiwayatTransaksi()
    {
        return view('Admin/DataRiwayatTransaksi', [
        ]);
    }
}
