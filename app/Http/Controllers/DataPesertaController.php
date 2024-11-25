<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengguna;

class DataPesertaController extends Controller
{
    public function dataPeserta()
    {
        // Ambil data peserta dengan peran 'Peserta'
        $pesertaList = Pengguna::where('peran', 'Peserta')->paginate(10);

        // Kirim data ke view
        return view('Admin.DataPeserta', [
            'pesertaList' => $pesertaList,
        ]);
    }

    public function destroy($id)
    {
        $peserta = Pengguna::findOrFail($id);

        $peserta->delete();

        return redirect()->back()->with('success', 'Peserta berhasil dihapus.');
    }
    
}
