<?php

namespace App\Http\Controllers;

use App\Models\Keahlian;
use Illuminate\Support\Facades\Auth;
use App\Models\Pengguna;
use App\Models\Peserta;
use Illuminate\Http\Request;


class PengaturanPesertaController extends Controller
{
    public function pengaturanPeserta()
    {
        // Mendapatkan ID pengguna yang sedang login
        $id = Auth::id();

        $pengguna = Pengguna::with('peserta')->find($id);

        if (!$pengguna) {
            return redirect()->back()->with('error', 'Pengguna tidak ditemukan.');
        }

        // Ambil daftar pelatih (jika ada)
        $pesertaList = Peserta::where('pengguna_id', $id)->paginate(10); // Gunakan paginate jika diperlukan

        return view('peserta.PengaturanPeserta', [
            'pengguna' => $pengguna,
            'peserta' => $pengguna->peserta, // Relasi pelatih dari pengguna
            'pesertaList' => $pesertaList, // Tambahkan variabel $pelatihList ke view
        ]);
    }

    public function updatePeserta(Request $request)
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

    public function storePeserta(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'pengalaman_kerja' => 'nullable|integer',
            'nama_keahlian' => 'nullable|string|max:255',
        ]);

        $pengguna_id = Auth::id();

        // Default pengalaman_kerja ke 0 jika tidak diberikan
        $pengalaman_kerja = $validatedData['pengalaman_kerja'] ?? 0;

        // Membuat instance peserta baru
        $peserta = new Peserta();
        $peserta->pengguna_id = $pengguna_id;
        $peserta->pengalaman_kerja = $pengalaman_kerja;
        $peserta->nama_keahlian = $validatedData['nama_keahlian'] ?? null; // Mengganti field nama_spesialisasi menjadi nama_keahlian
        $peserta->save();

        return redirect()->back()->with('success', 'Data berhasil disimpan.');
    }

    public function updatePesertaKeahlian(Request $request, $peserta_id)
    {
        $request->validate([
            'pengalaman_kerja' => 'required|integer|min:0',
            'nama_keahlian' => 'required|string|max:255', // Ganti dari nama_spesialisasi ke nama_keahlian
        ]);

        // Cari peserta berdasarkan ID
        $peserta = Peserta::findOrFail($peserta_id);

        // Update pengalaman kerja dan nama keahlian
        $peserta->pengalaman_kerja = $request->input('pengalaman_kerja');
        $peserta->nama_keahlian = $request->input('nama_keahlian');

        // Simpan perubahan ke database
        $peserta->save();

        // Redirect kembali dengan pesan sukses
        return redirect()->back()->with('success', 'Data peserta berhasil diperbarui.');
    }

    public function destroyPeserta($peserta_id)
    {
        $peserta = Peserta::findOrFail($peserta_id);

        $peserta->delete();

        return redirect()->back()->with('success', 'Peserta berhasil dihapus.');
    }
}
