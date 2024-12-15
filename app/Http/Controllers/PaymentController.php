<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use App\Models\Pembayaran;
use Illuminate\Http\Request;
use Midtrans\Config;
use Midtrans\Snap;
use Carbon\Carbon;
use Midtrans\Transaction;
use Illuminate\Support\Facades\Log;

class PaymentController extends Controller
{
    public function processPayment(Request $request)
    {
        // Ambil data pendaftaran berdasarkan pendaftaran_id yang ada di request
        $pendaftaran_id = $request->pendaftaran_id;
        $pendaftaran = Pendaftaran::find($pendaftaran_id);

        if (!$pendaftaran) {
            return response()->json(['error' => 'Pendaftaran tidak ditemukan'], 404);
        }

        // Ambil harga dari kursus yang didaftarkan
        $kursus = $pendaftaran->kursus;
        $totalPembayaran = $kursus->harga;

        // Pastikan gross_amount adalah angka bulat tanpa sen
        $totalPembayaran = round($totalPembayaran);

        // Konfigurasi Midtrans
        Config::$serverKey = config('midtrans.server_key');
        Config::$isProduction = config('midtrans.is_production');
        Config::$isSanitized = config('midtrans.is_sanitized');
        Config::$is3ds = config('midtrans.is_3ds');

        $orderId = uniqid(); // Buat order ID unik

        // Data untuk Snap token
        $params = [
            'transaction_details' => [
                'order_id' => $orderId,
                'gross_amount' => $totalPembayaran,
            ],
            'customer_details' => [
                'first_name' => $pendaftaran->pengguna->nama,
                'email' => $pendaftaran->pengguna->email,
            ],
        ];

        try {
            // Ambil Snap token
            $snapToken = Snap::getSnapToken($params);

            // Simpan data pembayaran ke tabel pembayaran
            $pembayaran = Pembayaran::create([
                'pendaftaran_id' => $pendaftaran->pendaftaran_id,
                'tgl_pembayaran' => Carbon::now(),
                'metode_pembayaran' => 'Midtrans',
                'jumlah' => $totalPembayaran,
                'status' => 'Pending',
                'midtrans_order_id' => $orderId,
                'midtrans_transaction_id' => null,
                'midtrans_status' => 'Pending',
                'midtrans_response' => null,
            ]);

            if (!$pembayaran) {
                return response()->json(['error' => 'Pembayaran gagal disimpan'], 500);
            }

            return response()->json(['snapToken' => $snapToken]);
        } catch (\Exception $e) {
            Log::error('Gagal memproses pembayaran: ' . $e->getMessage());
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function checkPaymentStatus(Request $request)
    {
        // Ambil order_id dari request
        $orderId = $request->order_id;

        // Cari pembayaran berdasarkan order_id
        $pembayaran = Pembayaran::where('midtrans_order_id', $orderId)->first();

        if (!$pembayaran) {
            return response()->json(['error' => 'Pembayaran tidak ditemukan'], 404);
        }

        // Konfigurasi Midtrans
        Config::$serverKey = config('midtrans.server_key');
        Config::$isProduction = config('midtrans.is_production');
        Config::$isSanitized = config('midtrans.is_sanitized');
        Config::$is3ds = config('midtrans.is_3ds');

        try {
            // Memanggil API Midtrans untuk memeriksa status transaksi
            $status = Transaction::status($orderId);

            // Log status untuk debugging
            Log::info('Status Pembayaran: ', (array) $status);

            // Periksa jika $status adalah objek atau array
            if (is_object($status)) {
                $transactionStatus = $status->transaction_status;
                $transactionId = $status->transaction_id;
            } else {
                // Jika status adalah array, gunakan indeks array
                $transactionStatus = $status['transaction_status'];
                $transactionId = $status['transaction_id'];
            }

            // Proses status transaksi yang diterima
            switch ($transactionStatus) {
                case 'settlement':
                case 'capture':
                    // Pembayaran berhasil
                    $pembayaran->status = 'Berhasil';
                    $pembayaran->midtrans_status = 'Berhasil';
                    break;

                case 'pending':
                    // Pembayaran masih dalam status pending
                    $pembayaran->status = 'Pending';
                    $pembayaran->midtrans_status = 'Pending';
                    break;

                case 'cancel':
                case 'expire':
                    // Pembayaran dibatalkan atau kedaluwarsa
                    $pembayaran->status = 'Gagal';
                    $pembayaran->midtrans_status = 'Gagal';
                    break;

                default:
                    $pembayaran->status = 'Gagal';
                    $pembayaran->midtrans_status = 'Gagal';
                    break;
            }

            // Menyimpan status terbaru ke database
            $pembayaran->midtrans_transaction_id = $transactionId;
            $pembayaran->midtrans_response = json_encode($status);
            $pembayaran->save();

            return response()->json(['status' => $pembayaran->status]);
        } catch (\Exception $e) {
            // Log error jika gagal memeriksa status transaksi
            Log::error('Gagal memeriksa status pembayaran: ' . $e->getMessage());
            return response()->json(['error' => 'Gagal memeriksa status pembayaran'], 500);
        }
    }
}
