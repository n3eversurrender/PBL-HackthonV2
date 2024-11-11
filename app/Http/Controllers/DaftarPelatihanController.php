<?php

namespace App\Http\Controllers;

use App\Models\Kursus;
use Illuminate\Http\Request;

class DaftarPelatihanController extends Controller
{
    public function daftarPelatihan()
    {
        // Ambil kursus dengan pengguna yang perannya Pelatih dan paginate
        $kursus = Kursus::with(['pengguna' => function ($query) {
            $query->where('peran', 'Pelatih');
        }, 'pendaftaran'])->paginate(10); // Paginate with a page size of 10

        return view('peserta.DaftarPelatihan', [
            'kursus' => $kursus,
        ]);
    }

    public function destroy($kursus_id)
    {
        // Find the kursus by ID and delete it
        $kursus = Kursus::findOrFail($kursus_id);
        $kursus->delete();

        // Redirect back to the previous page with a success message
        return back()->with('success', 'Kursus berhasil dihapus.');
    }
}
