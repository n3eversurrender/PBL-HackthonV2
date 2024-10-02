<!-- Rule Untuk Penaman Route,Controller & Class -->
<!-- Route: Huruf depan kata pertama kapital (contoh: Main), dan untuk dua kata (contoh: MainAdmin). -->
<!-- Controller: Gabungan dua kata, setiap kata diawali huruf kapital (contoh: MainController). -->
<!-- Class: Jika dua kata, pisahkan dengan underscore dan gunakan huruf kapital di awal setiap kata (contoh: Main_Admin). -->

<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\DataAdminController;
use App\Http\Controllers\DataPelatihController;
use App\Http\Controllers\DataPembayaranController;
use App\Http\Controllers\DataPesertaController;
use App\Http\Controllers\DataRiwayatTransaksiController;
use App\Http\Controllers\KursusController;
use App\Http\Controllers\MainAdminController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ManajemenAkunController;
use App\Http\Controllers\PesanAdminController;
use App\Http\Controllers\DaftarPelatihanController;
use App\Http\Controllers\DashboardPelatihController;
use App\Http\Controllers\DashboardPesertaController;
use App\Http\Controllers\PengaturanPelatihController;
use App\Http\Controllers\PengaturanPesertaController;
use App\Http\Controllers\PengelolaanKursusController;
use App\Http\Controllers\PengelolaanPelatihanController;
use App\Http\Controllers\PengelolaanSertifikatController;
use App\Http\Controllers\PesanPelatihController;
use App\Http\Controllers\PesanPesertaController;
use App\Http\Controllers\TambahKursusController;

// Route Layout
Route::get('/Main', [MainController::class, 'Main']);
Route::get('/MainAdmin', [MainAdminController::class, 'Main_Admin']);
Route::get('/MainPeserta', [MainController::class, 'Main_Peserta']);
Route::get('/MainPelatih', [MainController::class, 'Main_Pelatih']);



// Route Web Skill Bridge
Route::get('/Home', [MainController::class, 'Home']);
Route::get('/DaftarKursus', [MainController::class, 'Daftar_Kursus']);
Route::get('/TentangKami', [MainController::class, 'Tentang_Kami']);
Route::get('/Daftar', [ManajemenAkunController::class, 'Daftar']);
Route::get('/Masuk', [ManajemenAkunController::class, 'Masuk']);



// Route Peserta
Route::get('/DashboardPeserta', [DashboardPesertaController::class, 'Dashboard_Peserta']);
Route::get('/Kursus', [KursusController::class, 'Kursus']);
Route::get('/KursusModul', [KursusController::class, 'Kursus_Modul']);
Route::get('/KursusMateri', [KursusController::class, 'Kursus_Materi']);
Route::get('/PesanPeserta', [PesanPesertaController::class, 'Pesan_Peserta']);
Route::get('/PengaturanPeserta', [PengaturanPesertaController::class, 'Pengaturan_Peserta']);
Route::get('/DaftarPelatihan', [DaftarPelatihanController::class, 'Daftar_Pelatihan']);


//Route Pelatih
Route::get('/DashboardPelatih', [DashboardPelatihController::class, 'Dashboard_Pelatih']);
Route::get('/PesanPelatih', [PesanPelatihController::class, 'Pesan_Pelatih']);
Route::get('/PengaturanPelatih', [PengaturanPelatihController::class, 'Pengaturan_Pelatih']);
Route::get('/PengelolaanKursus', [PengelolaanKursusController::class, 'Pengelolaan_Kursus']);
Route::get('/PengelolaanSertifikat', [PengelolaanSertifikatController::class, 'Pengelolaan_Sertifikat']);
Route::get('/PengelolaanPelatihan', [PengelolaanPelatihanController::class, 'Pengelolaan_Pelatihan']);
Route::get('/TambahKursus', [TambahKursusController::class, 'Tambah_Kurusu']);


// Route Admin
Route::get('/DashboardAdmin', [DashboardAdminController::class, 'Dashboard_Admin']);
Route::get('/DataAdmin', [DataAdminController::class, 'Data_Admin']);
Route::get('/DataPeserta', [DataPesertaController::class, 'Data_Peserta']);
Route::get('/DataPelatih', [DataPelatihController::class, 'Data_Pelatih']);
Route::get('/DataPembayaran', [DataPembayaranController::class, 'Data_Pembayaran']);
Route::get('/DataRiwayatTransaksi', [DataRiwayatTransaksiController::class, 'Data_Riwayat_Transaksi']);
Route::get('/PesanAdmin', [PesanAdminController::class, 'Pesan_Admin']);