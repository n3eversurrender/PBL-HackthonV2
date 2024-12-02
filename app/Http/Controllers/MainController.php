<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Kursus;
use App\Models\Pendaftaran;
use App\Models\UmpanBalik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function Main()
    {
        // Mendapatkan data pengguna yang sedang login
        $user = Auth::user();

        // Mengirimkan data pengguna ke view
        return view('layouts.main', compact('user'));
    }

    public function mainPeserta()
    {
        return view('layouts/mainPeserta', []);
    }
    public function mainPelatih()
    {
        return view('layouts/mainPelatih', []);
    }

    public function Home()
    {
        // Ambil maksimal 4 data dari tabel 'umpan_balik'
        $data = UmpanBalik::take(3)->get();

        // Kirim data ke view
        return view('guest.Home', compact('data'));
    }

    public function daftarKursus(Request $request)
    {
        $kategori_id = $request->input('kategori_id'); // Ambil kategori yang dipilih
        $tingkat_kesulitan = $request->input('tingkat_kesulitan'); // Ambil tingkat kesulitan yang dipilih

        // Query dasar untuk mengambil kursus
        $query = Kursus::with('kategori');

        // Filter berdasarkan kategori jika ada
        if ($kategori_id) {
            $query->where('kategori_id', $kategori_id);
        }

        // Filter berdasarkan tingkat kesulitan jika ada dan tidak default "-"
        if ($tingkat_kesulitan && $tingkat_kesulitan !== '-') {
            $query->where('tingkat_kesulitan', $tingkat_kesulitan);
        }

        // Paginate hasil query
        $kursus = $query->paginate(9);

        // Ambil daftar tingkat kesulitan unik dari data kursus yang ada
        $uniqueTingkatKesulitan = Kursus::select('tingkat_kesulitan')
            ->whereIn('kursus_id', $kursus->pluck('kursus_id')) // Hanya ambil tingkat kesulitan yang relevan dengan kursus yang dipilih
            ->distinct()
            ->get();

        // Ambil data kategori untuk ditampilkan di filter
        $kategori = Kategori::all();

        // Kirim data ke view
        return view('guest.DaftarKursus', [
            'kursus' => $kursus,
            'kategori' => $kategori,
            'uniqueTingkatKesulitan' => $uniqueTingkatKesulitan,
        ]);
    }

    public function tentangKami()
    {
        return view('guest/TentangKami', []);
    }

    public function coursePage($id)
    {
        // Fetch kursus dengan 4 rating pertama
        $kursus = Kursus::with(['kurikulum', 'ratingKursus.pengguna'])
            ->findOrFail($id);

        // Ambil hanya 4 rating pertama
        $ratings = $kursus->ratingKursus->take(4);

        // Pass kursus dan rating yang dibatasi ke view
        return view('guest.CoursePage', compact('kursus', 'ratings'));
    }


    public function paymentPage()
    {
        return view('guest/PaymentPage', []);
    }

    public function daftarTransaksi()
    {
        $id = Auth::id(); // Ambil ID pengguna yang sedang login

        // Ambil pendaftaran yang terkait dengan pengguna yang sedang login
        $pendaftaran = Pendaftaran::with(['kursus.pengguna']) // Memuat relasi kursus dan pengguna (pelatih)
            ->where('pengguna_id', $id) // Filter berdasarkan peserta yang login
            ->paginate(10); // Paginate dengan ukuran 10 per halaman

        return view('guest.DaftarTransaksi', [
            'pendaftaran' => $pendaftaran,
        ]);
    }

    public function store(Request $request)
    {
        // Validasi data
        $validated = $request->validate([
            'kursus_id' => 'required|exists:kursus,kursus_id',
        ]);

        // Simpan data pendaftaran
        Pendaftaran::create([
            'pengguna_id' => auth()->id(), // ID pengguna yang sedang login
            'kursus_id' => $validated['kursus_id'],
            'tgl_pendaftaran' => $request->tgl_pendaftaran,
            'status_pendaftaran' => 'Menunggu',
            'status_pembayaran' => 'Pending',
        ]);

        // Redirect dengan pesan sukses
        return redirect('/DaftarTransaksi')->with('success', 'Pendaftaran berhasil dilakukan!');
    }
}
