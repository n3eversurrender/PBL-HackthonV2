<?php

namespace App\Http\Controllers;

use App\Models\Kursus;
use Illuminate\Http\Request;

class DataKursusController extends Controller
{
    public function dataKursus()
    {
        // Ambil data kursus dengan pagination 10 data per halaman
        $kursusList = Kursus::paginate(10);

        // Kirim data ke view
        return view('Admin.DataKursus', [
            'kursusList' => $kursusList,
        ]);
    }

    public function destroy($id)
    {
        // Temukan kursus berdasarkan ID
        $kursus = Kursus::findOrFail($id);

        // Hapus kursus
        $kursus->delete();

        // Redirect kembali ke halaman DataKursus dengan pesan sukses
        return redirect()->route('DataKursus')->with('success', 'Kursus berhasil dihapus!');
    }
}
