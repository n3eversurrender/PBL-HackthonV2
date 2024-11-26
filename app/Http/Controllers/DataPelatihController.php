<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengguna;

class DataPelatihController extends Controller
{
    public function dataPelatih()
    {
        $penggunaList = Pengguna::where('peran', 'Pelatih')
            ->with('pelatih') // Mengambil data relasi pelatih
            ->paginate(10);

        return view('Admin.DataPelatih', [
            'penggunaList' => $penggunaList,
        ]);
    }

    public function update($pengguna_id, Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'status' => 'required|in:Aktif,Tidak Aktif',
        ]);

        // Cari pengguna berdasarkan pengguna_id
        $pengguna = Pengguna::findOrFail($pengguna_id);

        // Update status pengguna
        $pengguna->status = $validated['status'];
        $pengguna->save();

        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Status pelatih berhasil diupdate');
    }

    // Menghapus pelatih
    public function destroy($pengguna_id)
    {
        $pengguna = Pengguna::findOrFail($pengguna_id);

        $pengguna->delete();

        return redirect()->back()->with('success', 'Pelatih berhasil dihapus.');
    }
}
