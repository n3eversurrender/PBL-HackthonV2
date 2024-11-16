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
        // Cari peserta berdasarkan id
        $peserta = Pengguna::findOrFail($id);

        // Hapus peserta
        $peserta->delete();

        // Redirect atau kembali ke halaman sebelumnya
        return redirect()->route('DataPeserta')->with('success', 'Peserta berhasil dihapus.');
    }
}
