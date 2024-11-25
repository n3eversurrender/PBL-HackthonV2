<?php

namespace App\Http\Controllers;

use App\Models\Pelatih;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Pengguna;
use Illuminate\Support\Facades\Storage;


class PengaturanPelatihController extends Controller
{
    public function pengaturanPelatih()
    {
        $id = Auth::id();

        $pengguna = Pengguna::with('pelatih')->find($id);

        if (!$pengguna) {
            return redirect()->back()->with('error', 'Pengguna tidak ditemukan.');
        }

        // Ambil daftar pelatih (jika ada)
        $pelatihList = Pelatih::where('pengguna_id', $id)->paginate(10); // Gunakan paginate jika diperlukan

        return view('pelatih.PengaturanPelatih', [
            'pengguna' => $pengguna,
            'pelatih' => $pengguna->pelatih, // Relasi pelatih dari pengguna
            'pelatihList' => $pelatihList, // Tambahkan variabel $pelatihList ke view
        ]);
    }

    public function updatePelatih(Request $request)
    {
        // Validasi data input 
        $request->validate([
            'nama' => 'required|string|max:255',
            'no_telepon' => 'nullable|string|max:15',
            'alamat' => 'nullable|string|max:255',
            'kata_sandi' => 'nullable|string|min:6',
            'jenis_kelamin' => 'required|string|in:Laki-laki,Perempuan',
        ]);

        // Mendapatkan ID pengguna yang sedang login
        $id = Auth::id();

        // Ambil data pengguna berdasarkan ID
        $pengguna = Pengguna::find($id);

        // Update data pengguna
        $pengguna->nama = $request->nama;
        $pengguna->no_telepon = $request->no_telepon;
        $pengguna->alamat = $request->alamat;
        $pengguna->jenis_kelamin = $request->jenis_kelamin;

        // Perbarui password hanya jika diisi
        if (!empty($request->kata_sandi)) {
            $pengguna->kata_sandi = bcrypt($request->kata_sandi);
        }

        $pengguna->save(); // Simpan perubahan ke database

        // Redirect kembali dengan pesan sukses
        return redirect()->back()->with('success', 'Data berhasil diperbarui.');
    }

    public function storePelatih(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'pengalaman_kerja' => 'nullable|integer',
            'nama_spesialisasi' => 'nullable|string|max:255',
            'file_sertifikasi' => 'nullable|file|mimes:pdf|max:5120',
        ]);

        $pengguna_id = Auth::id();

        $pengalaman_kerja = $validatedData['pengalaman_kerja'] ?? 0; // Set ke 0 jika null

        $file_sertifikasi = null;
        if ($request->hasFile('file_sertifikasi')) {
            $file = $request->file('file_sertifikasi');
            $namaFile = $file->getClientOriginalName();

            $file_sertifikasi = $file->storeAs('sertifikasi_pdfs', $namaFile, 'public');
        }

        $pelatih = new Pelatih();
        $pelatih->pengguna_id = $pengguna_id;
        $pelatih->pengalaman_kerja = $pengalaman_kerja;
        $pelatih->nama_spesialisasi = $validatedData['nama_spesialisasi'] ?? null;
        $pelatih->file_sertifikasi = $file_sertifikasi;
        $pelatih->save();

        return redirect()->back()->with('success', 'Data berhasil disimpan.');
    }

    public function updatePelatihSpesialisasi(Request $request, $pelatih_id)
    {
        // Validasi input
        $request->validate([
            'pengalaman_kerja' => 'required|integer|min:0',
            'nama_spesialisasi' => 'required|string|max:255',
            'file_sertifikasi' => 'nullable|file|mimes:pdf|max:5120', // Validasi file PDF
        ]);

        // Cari pelatih berdasarkan ID
        $pelatih = Pelatih::findOrFail($pelatih_id);

        // Update pengalaman kerja dan spesialisasi
        $pelatih->pengalaman_kerja = $request->input('pengalaman_kerja');
        $pelatih->nama_spesialisasi = $request->input('nama_spesialisasi');

        // Periksa apakah ada file sertifikasi yang diupload
        if ($request->hasFile('file_sertifikasi')) {
            // Hapus file lama jika ada
            if ($pelatih->file_sertifikasi) {
                Storage::delete('public/' . $pelatih->file_sertifikasi);
            }

            // Simpan file sertifikasi baru
            $file = $request->file('file_sertifikasi');
            $filePath = $file->storeAs('sertifikasi_pdfs', $file->getClientOriginalName(), 'public');
            $pelatih->file_sertifikasi = $filePath;
        }

        // Simpan perubahan ke database
        $pelatih->save();

        // Redirect kembali dengan pesan sukses
        return redirect()->back()->with('success', 'Data spesialisasi pelatih berhasil diperbarui.');
    }

    public function destroyPelatih($pelatih_id)
    {
        $pelatih = Pelatih::findOrFail($pelatih_id);

        if ($pelatih->file_sertifikasi) {
            Storage::delete('public/' . $pelatih->file_sertifikasi);
        }

        $pelatih->delete();

        return redirect()->back()->with('success', 'Pelatih berhasil dihapus.');
    }
}