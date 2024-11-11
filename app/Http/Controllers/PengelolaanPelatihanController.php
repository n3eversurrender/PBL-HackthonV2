<?php

namespace App\Http\Controllers;

use App\Models\Kursus;
use App\Models\Pendaftaran;
use App\Models\Pengguna;
use Illuminate\Http\Request;


class PengelolaanPelatihanController extends Controller
{
    public function pengelolaanPelatihan()
    {
        $kursus = Kursus::all();

        return view('pelatih.PengelolaanPelatihan', [
            'kursus' => $kursus,
        ]);
    }

    public function pengelolaanPelatihanDetail($kursus_id)
    {
        $kursus = Kursus::find($kursus_id);

        if (!$kursus) {
            return redirect()->route('kursus.index');
        }

        $pengguna = Pengguna::whereHas('pendaftaran', function ($query) use ($kursus_id) {
            $query->where('kursus_id', $kursus_id);
        })->get();

        // Apply pagination to the pendaftaran query
        $pendaftaran = Pendaftaran::where('kursus_id', $kursus_id)
            ->whereIn('pengguna_id', $pengguna->pluck('pengguna_id'))
            ->paginate(10);  // Adjust the number of items per page if needed

        return view('pelatih.PengelolaanPelatihanDetail', compact('kursus', 'pengguna', 'pendaftaran'));
    }


    public function destroy($pendaftaran_id)
    {
        // Temukan data pendaftaran berdasarkan pendaftaran_id
        $pendaftaran = Pendaftaran::find($pendaftaran_id);

        // Jika data ditemukan, hapus
        if ($pendaftaran) {
            $pendaftaran->delete();
        }

        // Redirect kembali ke halaman sebelumnya dengan pesan sukses
        return back()->with('success', 'Pendaftaran berhasil dihapus.');
    }

    public function update(Request $request, $pendaftaran_id)
    {
        $pendaftaran = Pendaftaran::find($pendaftaran_id);

        if (!$pendaftaran) {
            return back()->with('error', 'Pendaftaran tidak ditemukan.');
        }

        // Validasi dan update status pendaftaran
        $request->validate([
            'status_pendaftaran' => 'required|in:Aktif,Selesai,Dibatalkan',
        ]);

        $pendaftaran->status_pendaftaran = $request->status_pendaftaran;
        $pendaftaran->save();

        return back()->with('success', 'Status pendaftaran berhasil diperbarui.');
    }
}