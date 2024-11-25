<?php

namespace App\Http\Controllers;

use App\Models\Sertifikat;
use Illuminate\Http\Request;

class DataSertifikatController extends Controller
{
    public function dataSertifikat()
    {
        // Ambil semua sertifikat tanpa eager loading
        $sertifikat = Sertifikat::paginate(10);

        return view('Admin.DataSertifikat', [
            'sertifikat' => $sertifikat,
        ]);
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
        return redirect()->back()->with('success', 'Sertifikat berhasil dihapus.');
    }
}
