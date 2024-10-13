<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PesanAdminController extends Controller
{
    public function pesanAdmin()
    {
        return view('Admin/PesanAdmin', [
        ]);
    }
}
