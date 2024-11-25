<?php

namespace App\Http\Controllers;

use App\Models\Kursus;
use App\Models\Sertifikat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log; // Untuk logging
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator; // Jika validasi manual digunakan

class PengelolaanSertifikatController extends Controller
{
    // Menampilkan daftar sertifikat dengan paginasi
    public function pengelolaanSertifikat()
    {
        // Ambil semua sertifikat tanpa eager loading
        $sertifikat = Sertifikat::paginate(10);

        return view('pelatih.PengelolaanSertifikat', [
            'sertifikat' => $sertifikat,
        ]);
    }


    // Menampilkan form untuk menambahkan sertifikat
    public function tambahSertifikat()
    {
        $id = Auth::id();

        $kursus = Kursus::where('pengguna_id', $id)->get();

        return view('pelatih.TambahSertifikat', compact('kursus'));
    }


    // Menyimpan sertifikat baru ke database
    public function store(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'kursus_id' => 'required|exists:kursus,kursus_id',
            'file_sertifikat' => 'required|file|mimes:pdf|max:10240',
            'nomor_sertifikat' => 'required|string',
            'tanggal_terbit' => 'required|date',
        ]);

        // Menyimpan file sertifikat ke folder 'sertifikat_pdfs'
        $file = $request->file('file_sertifikat');
        $filePath = $file->store('sertifikat_pdfs');  // Menyimpan file sertifikat

        // Mengambil nama file untuk ditampilkan
        $fileName = $file->getClientOriginalName(); // Get the original file name

        // Menyimpan data sertifikat ke database
        $sertifikat = new Sertifikat();
        $sertifikat->kursus_id = $request->kursus_id;
        $sertifikat->nama_kursus = Kursus::find($request->kursus_id)->judul;  // Menyimpan nama kursus berdasarkan kursus_id
        $sertifikat->file_sertifikat = $fileName; // Menyimpan nama file sertifikat
        $sertifikat->nomor_sertifikat = $request->nomor_sertifikat;
        $sertifikat->tanggal_terbit = $request->tanggal_terbit;
        $sertifikat->save();

        // Redirect ke halaman pengelolaan sertifikat dengan pesan sukses
        return redirect()->route('PengelolaanSertifikat')->with('success', 'Sertifikat berhasil ditambahkan.');
    }

    // Menampilkan form untuk mengedit sertifikat berdasarkan id
    public function editSertifikat($sertifikat_id)
    {
        // Mengambil data sertifikat berdasarkan id
        $sertifikat = Sertifikat::findOrFail($sertifikat_id);
        $kursus = Kursus::all(); // Mengambil semua kursus untuk dropdown

        // Kirim data sertifikat dan kursus ke view
        return view('pelatih.EditSertifikat', compact('sertifikat', 'kursus'));
    }

    // Mengupdate sertifikat yang sudah ada di database
    public function update(Request $request, $sertifikat_id)
    {

        Log::info('Request Data: ', $request->all());

        $validatedData = $request->validate([
            'file_sertifikat' => 'nullable|file|mimes:pdf|max:10240', // Hanya file yang divalidasi
            'nomor_sertifikat' => 'required|string',
            'tanggal_terbit' => 'required|date',
        ]);

        $sertifikat = Sertifikat::findOrFail($sertifikat_id);

        if ($request->hasFile('file_sertifikat')) {
            $file = $request->file('file_sertifikat');
            $originalFileName = $file->getClientOriginalName();
            $filePath = $file->storeAs('sertifikat_pdfs', $originalFileName);
            $sertifikat->file_sertifikat = $filePath;
        }

        $sertifikat->nomor_sertifikat = $validatedData['nomor_sertifikat'];
        $sertifikat->tanggal_terbit = $validatedData['tanggal_terbit'];

        $success = $sertifikat->save();

        if ($success) {
            Log::info('Sertifikat berhasil diperbarui: ', $sertifikat->toArray());
        } else {
            Log::error('Gagal menyimpan perubahan pada sertifikat ID: ' . $sertifikat_id);
        }

        return redirect()->route('PengelolaanSertifikat')->with('success', 'Sertifikat berhasil diperbarui.');
    }


    // Menghapus sertifikat dari database
    public function destroy($sertifikat_id)
    {
        // Mengambil data sertifikat berdasarkan id
        $sertifikat = Sertifikat::findOrFail($sertifikat_id);

        // Hapus file sertifikat jika ada
        if (file_exists(storage_path('app/sertifikat_pdfs/' . $sertifikat->file_sertifikat))) {
            unlink(storage_path('app/sertifikat_pdfs/' . $sertifikat->file_sertifikat));  // Hapus file sertifikat
        }

        // Hapus sertifikat dari database
        $sertifikat->delete();

        // Redirect kembali ke halaman pengelolaan sertifikat dengan pesan sukses
        return redirect()->route('PengelolaanSertifikat')->with('success', 'Sertifikat berhasil dihapus.');
    }
}
