<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Kursus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class PengelolaanKursusController extends Controller
{
    public function pengelolaanKursus()
    {
        $id = Auth::id(); 
        $kursus = Kursus::where('pengguna_id', $id)->paginate(10); 

        $kategori = Kategori::all();

        return view('pelatih.PengelolaanKursus', [
            'kursus' => $kursus,
            'kategori' => $kategori,
        ]);
    }

    // Tambahkan fungsi penyimpanan untuk menambah kursus baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'harga' => 'required|numeric',
            'tingkat_kesulitan' => 'required|in:Pemula,Menengah,Lanjutan',
            'tgl_mulai' => 'required|date',
            'tgl_selesai' => 'required|date|after_or_equal:tgl_mulai',
            'lokasi' => 'required|string',
            'kapasitas' => 'required|integer',
            'kategori_id' => 'required|exists:kategori,kategori_id',
            'foto_kursus' => 'nullable|image|mimes:jpg,jpeg,png|max:5120',
        ]);


        $kursus = new Kursus();
        $kursus->judul = $validated['judul'];
        $kursus->deskripsi = $validated['deskripsi'];
        $kursus->harga = $validated['harga'];
        $kursus->tingkat_kesulitan = $validated['tingkat_kesulitan'];
        $kursus->lokasi = $validated['lokasi'];
        $kursus->tgl_mulai = $validated['tgl_mulai'];
        $kursus->tgl_selesai = $validated['tgl_selesai'];
        $kursus->kapasitas = $validated['kapasitas'];
        $kursus->kategori_id = $validated['kategori_id'];

        // Menambahkan pengguna_id (ID pengguna yang sedang login)
        $kursus->pengguna_id = Auth::id();  // Mengambil ID pengguna yang sedang login

        if ($request->hasFile('foto_kursus')) {
            $file = $request->file('foto_kursus');
            $path = $file->store('kursus_fotos', 'public');
            $kursus->foto_kursus = $path;
        }

        $kursus->save();

        return redirect()->route('PengelolaanKursus')->with('success', 'Kursus berhasil ditambahkan.');
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
            'kapasitas' => 'required|integer',
            'kategori_id' => 'required|exists:kategori,kategori_id',
            'foto_kursus' => 'nullable|image|mimes:jpg,jpeg,png|max:5120', // Validation for image
        ]);

        $kursus = Kursus::findOrFail($kursus_id);
        $kursus->judul = $validated['judul'];
        $kursus->deskripsi = $validated['deskripsi'];
        $kursus->harga = $validated['harga'];
        $kursus->tingkat_kesulitan = $validated['tingkat_kesulitan'];
        $kursus->tgl_mulai = $validated['tgl_mulai'];
        $kursus->tgl_selesai = $validated['tgl_selesai'];
        $kursus->kapasitas = $validated['kapasitas'];
        $kursus->kategori_id = $validated['kategori_id'];


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
}
