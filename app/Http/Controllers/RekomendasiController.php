<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

class RekomendasiController extends Controller
{

    public function getRecommendation(Request $request)
    {
        // URL Flask API
        $apiUrl = 'http://127.0.0.1:9999/rekomendasi';

        // Ambil data dari formulir
        $formData = $request->all();

        // Kirim permintaan ke Flask API
        $response = Http::post($apiUrl, $formData);

        // Cek apakah respons berhasil
        if ($response->successful()) {
            // Ambil data hasil rekomendasi
            $data = $response->json();

            // Kirim data ke Blade view untuk ditampilkan
            return view('guest.recommendation', compact('data'));
        } else {
            // Jika ada error, kembali ke formulir dengan pesan error
            return back()->withErrors(['message' => 'Gagal mendapatkan rekomendasi. Coba lagi!']);
        }
    }
}
