<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use App\Models\Pembayaran;
use Illuminate\Http\Request;
use Midtrans\Config;
use Midtrans\Snap;
use Carbon\Carbon;

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
        $totalPembayaran = round($totalPembayaran);  // Pastikan tidak ada desimal

        // Konfigurasi Midtrans
        Config::$serverKey = config('midtrans.server_key');
        Config::$isProduction = config('midtrans.is_production');
        Config::$isSanitized = config('midtrans.is_sanitized');
        Config::$is3ds = config('midtrans.is_3ds');

        $orderId = uniqid();
        // Data untuk Snap token
        $params = [
            'transaction_details' => [
                'order_id' => $orderId, // ID order unik dengan format yang lebih terstruktur
                'gross_amount' => $totalPembayaran, // Total pembayaran
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
                'midtrans_transaction_id' => null, // Akan diisi setelah pembayaran selesai
                'midtrans_status' => 'Pending',
                'midtrans_response' => null, // Akan diisi setelah pembayaran selesai
            ]);

            // Pastikan Pembayaran berhasil disimpan
            if (!$pembayaran) {
                return response()->json(['error' => 'Pembayaran gagal disimpan'], 500);
            }

            return response()->json(['snapToken' => $snapToken]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function callback(Request $request)
    {
        // Handle callback dari Midtrans
        $transactionStatus = $request->transaction_status;
        $orderId = $request->order_id;

        // Ambil pembayaran yang sesuai dengan order_id
        $pembayaran = Pembayaran::where('midtrans_order_id', $orderId)->first();

        if ($pembayaran) {
            // Update status pembayaran
            $pembayaran->midtrans_transaction_id = $request->transaction_id;
            $pembayaran->midtrans_status = $transactionStatus;
            $pembayaran->midtrans_response = json_encode($request->all());

            // Update status pendaftaran berdasarkan status transaksi
            $pendaftaran = Pendaftaran::find($pembayaran->pendaftaran_id);
            if ($transactionStatus == 'capture' || $transactionStatus == 'settlement') {
                $pembayaran->status = 'Berhasil';
                $pendaftaran->status_pendaftaran = 'Aktif';
                $pendaftaran->status_pembayaran = 'Berhasil';
            } else if ($transactionStatus == 'cancel' || $transactionStatus == 'failed') {
                $pembayaran->status = 'Gagal';
                $pendaftaran->status_pendaftaran = 'Dibatalkan';
                $pendaftaran->status_pembayaran = 'Gagal';
            }
            // Simpan perubahan pada pembayaran dan pendaftaran
            $pembayaran->save();
            $pendaftaran->save();
        }

        return response()->json(['status' => 'success']);
    }
}
