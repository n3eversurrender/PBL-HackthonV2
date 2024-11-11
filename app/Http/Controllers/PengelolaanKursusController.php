<?php

namespace App\Http\Controllers;

use App\Models\Kursus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class PengelolaanKursusController extends Controller
{
    public function pengelolaanKursus()
    {
        $kursus = Kursus::paginate(10);

        return view('pelatih.PengelolaanKursus', [
            'kursus' => $kursus
        ]);
    }

    public function destroy($kursusId)
    {
        $kursus = Kursus::findOrFail($kursusId);
        $kursus->delete();

        return redirect()->back()->with('success', 'Pelatihan berhasil dihapus');
    }

    public function show($kursusId)
    {
        $kursus = Kursus::findOrFail($kursusId);

        return view('pelatih.ShowKursus', compact('kursus'));
    }

    public function update(Request $request, $kursus_id)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'harga' => 'required|numeric',
            'tingkat_kesulitan' => 'required|string',
            'tgl_mulai' => 'required|date',
            'tgl_selesai' => 'required|date',
            'status' => 'required|string',
            'kapasitas' => 'required|integer',
            'foto_kursus' => 'nullable|image|mimes:jpg,jpeg,png|max:2048', // Validation for image
        ]);

        $kursus = Kursus::findOrFail($kursus_id);
        $kursus->judul = $validated['judul'];
        $kursus->deskripsi = $validated['deskripsi'];
        $kursus->harga = $validated['harga'];
        $kursus->tingkat_kesulitan = $validated['tingkat_kesulitan'];
        $kursus->tgl_mulai = $validated['tgl_mulai'];
        $kursus->tgl_selesai = $validated['tgl_selesai'];
        $kursus->status = $validated['status'];
        $kursus->kapasitas = $validated['kapasitas'];

        // Handle file upload
        if ($request->hasFile('foto_kursus')) {
            if ($kursus->foto_kursus) {
                Storage::delete('public/' . $kursus->foto_kursus);
            }
            $file = $request->file('foto_kursus');
            $path = $file->store('kursus_fotos', 'public');
            $kursus->foto_kursus = $path;
        }
        $kursus->save();

        return redirect()->route('PengelolaanKursus')->with('success', 'Kursus berhasil diperbarui.');
    }

    // Tambahkan fungsi penyimpanan untuk menambah kursus baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'harga' => 'required|numeric',
            'tingkat_kesulitan' => 'required|string',
            'jadwal' => 'required|date', // Validasi untuk tanggal
            'tgl_mulai' => 'required|date',
            'tgl_selesai' => 'required|date',
            'status' => 'required|string',
            'kapasitas' => 'required|integer',
            'foto_kursus' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $kursus = new Kursus();
        $kursus->judul = $validated['judul'];
        $kursus->deskripsi = $validated['deskripsi'];
        $kursus->harga = $validated['harga'];
        $kursus->tingkat_kesulitan = $validated['tingkat_kesulitan'];
        $kursus->jadwal = $validated['jadwal']; // Simpan tanggal jadwal
        $kursus->tgl_mulai = $validated['tgl_mulai'];
        $kursus->tgl_selesai = $validated['tgl_selesai'];
        $kursus->status = $validated['status'];
        $kursus->kapasitas = $validated['kapasitas'];

        if ($request->hasFile('foto_kursus')) {
            $file = $request->file('foto_kursus');
            $path = $file->store('kursus_fotos', 'public');
            $kursus->foto_kursus = $path;
        }

        $kursus->save();

        return redirect()->route('PengelolaanKursus')->with('success', 'Kursus berhasil ditambahkan.');
    }
}
