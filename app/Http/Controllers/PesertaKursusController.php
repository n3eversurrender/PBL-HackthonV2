<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PesertaKursusController extends Controller
{
    public function pesertaKursus()
    {
        return view('Admin/PesertaKursus', [
        ]);
    }
}
