<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengguna;

class DataPelatihController extends Controller
{
    public function dataPelatih()
    {
        $pelatihList = Pengguna::where('peran', 'Pelatih')->paginate(10);
        
        return view('Admin.DataPelatih', [
            'pelatihList' => $pelatihList,
        ]);
    }

    // Menghapus pelatih
    public function destroy($id)
    {
        // Cari pelatih berdasarkan id
        $pelatih = Pengguna::findOrFail($id);

        // Hapus pelatih
        $pelatih->delete();

        // Redirect kembali ke halaman daftar pelatih dengan pesan sukses
        return redirect()->route('DataPelatih')->with('success', 'Pelatih berhasil dihapus.');
    }
}
