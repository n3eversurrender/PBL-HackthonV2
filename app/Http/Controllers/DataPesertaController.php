<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataPesertaController extends Controller
{
    public function dataPeserta()
    {
        return view('Admin/DataPeserta', [
        ]);
    }
}
