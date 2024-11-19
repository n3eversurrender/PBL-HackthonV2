<?php

use Illuminate\Support\Facades\Route;

// <!-- Rule Untuk Penaman Route,Controller & Class -->
// <!-- Route: Huruf depan kata pertama kapital (contoh: Main), dan untuk dua kata (contoh: MainAdmin). -->
// <!-- Controller: Gabungan dua kata, setiap kata diawali huruf kapital (contoh: MainController). -->
// <!-- Class: Jika dua kata, gunakan huruf kecil di awal setiap kata (contoh: mainAdmin). -->

use App\Http\Controllers\MainController;
use App\Http\Controllers\ManajemenAkunController;

use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\DataAdminController;
use App\Http\Controllers\DataPelatihController;
use App\Http\Controllers\DataPesertaController;
use App\Http\Controllers\DataRiwayatTransaksiController;
use App\Http\Controllers\KursusController;
use App\Http\Controllers\MainAdminController;
use App\Http\Controllers\PesanAdminController;
use App\Http\Controllers\DaftarPelatihanController;
use App\Http\Controllers\DashboardPelatihController;
use App\Http\Controllers\DashboardPesertaController;
use App\Http\Controllers\DataKursusController;
use App\Http\Controllers\PengaturanPelatihController;
use App\Http\Controllers\PengaturanPesertaController;
use App\Http\Controllers\PengelolaanKursusController;
use App\Http\Controllers\PengelolaanPelatihanController;
use App\Http\Controllers\PengelolaanSertifikatController;
use App\Http\Controllers\PesanPelatihController;
use App\Http\Controllers\PesanPesertaController;
use App\Http\Controllers\TambahKurikulumController;
use App\Http\Controllers\TambahKursusController;
use App\Http\Controllers\PesertaKursusController;
use App\Http\Controllers\DetailPesertaKursusController;
use App\Http\Controllers\LoginAdminController;
use App\Http\Controllers\LoginPenggunaController;

// Route Default
Route::get('/', function () {
    return redirect('/Home');
});

// Route Layout
Route::get('/Main', [MainController::class, 'Main']);
Route::get('/MainAdmin', [MainAdminController::class, 'mainAdmin']);
Route::get('/MainPeserta', [MainController::class, 'mainPeserta']);
Route::get('/MainPelatih', [MainController::class, 'mainPelatih']);

// Route Web Skill Bridge
Route::get('/Home', [MainController::class, 'Home']);
Route::get('/DaftarKursus', [MainController::class, 'daftarKursus']);
Route::get('/TentangKami', [MainController::class, 'tentangKami']);
Route::get('/Daftar', [ManajemenAkunController::class, 'Daftar']);
Route::get('/Masuk', [ManajemenAkunController::class, 'Masuk'])->name('Masuk');
Route::get('/CoursePage', [MainController::class, 'coursePage']);
Route::get('/PaymentPage', [MainController::class, 'paymentPage']);



Route::post('/Masuk', [LoginPenggunaController::class, 'login'])->name('login');
Route::post('/logout', [LoginPenggunaController::class, 'logout'])->name('logout');

// Route Peserta
// Route::middleware(['auth'])->group(function () {
    Route::get('/DashboardPeserta', [DashboardPesertaController::class, 'dashboardPeserta'])->name('DashboardPeserta');
    Route::get('/Kursus', [KursusController::class, 'Kursus']);
    Route::get('/KursusModul/{id_kursus}', [KursusController::class, 'kursusModul'])->name('kursusModul.show');
    Route::get('/KursusMateri', [KursusController::class, 'kursusMateri'])->name('kursusMateri');
    Route::get('/PesanPeserta', [PesanPesertaController::class, 'pesanPeserta']);
    Route::get('/PengaturanPeserta', [PengaturanPesertaController::class, 'pengaturanPeserta']);
    Route::get('/DaftarPelatihan', [DaftarPelatihanController::class, 'daftarPelatihan']);
    Route::delete('/daftar-pelatihan/{pendaftaran_id}', [DaftarPelatihanController::class, 'destroy'])->name('DaftarPelatihan.destroy');
// });

// Route::middleware(['auth'])->group(function () {
    Route::get('/DashboardPelatih', [DashboardPelatihController::class, 'dashboardPelatih'])->name('DashboardPelatih');
    Route::get('/PesanPelatih', [PesanPelatihController::class, 'pesanPelatih']);
    Route::get('/PengaturanPelatih', [PengaturanPelatihController::class, 'pengaturanPelatih']);
    Route::get('/PengelolaanSertifikat', [PengelolaanSertifikatController::class, 'pengelolaanSertifikat'])->name('PengelolaanSertifikat');
    Route::get('/TambahSertifikat', [PengelolaanSertifikatController::class, 'tambahSertifikat'])->name('TambahSertifikat');
    Route::post('/tambah-sertifikat', [PengelolaanSertifikatController::class, 'store'])->name('sertifikat.store');
    Route::get('/edit-sertifikat/{sertifikat_id}', [PengelolaanSertifikatController::class, 'editSertifikat'])->name('sertifikat.edit');
    Route::put('/update-sertifikat/{sertifikat_id}', [PengelolaanSertifikatController::class, 'update'])->name('sertifikat.update');
    Route::delete('/delete-sertifikat/{sertifikat_id}', [PengelolaanSertifikatController::class, 'destroy'])->name('sertifikat.delete');
    Route::get('/PengelolaanPelatihan', [PengelolaanPelatihanController::class, 'pengelolaanPelatihan']);
    Route::get('/PengelolaanPelatihanDetail/{kursus_id}', [PengelolaanPelatihanController::class, 'pengelolaanPelatihanDetail'])->name('pengelolaanPelatihanDetail.show');
    Route::delete('/pendaftaran/{pendaftaran_id}', [PengelolaanPelatihanController::class, 'destroy'])->name('Pendaftaran.destroy');
    Route::put('/pendaftaran/{pendaftaran_id}', [PengelolaanPelatihanController::class, 'update'])->name('pendaftaran.update');
    Route::get('/PengelolaanKursus', [PengelolaanKursusController::class, 'pengelolaanKursus'])->name('PengelolaanKursus');
    Route::delete('/PengelolaanKursus/{kursus_id}', [PengelolaanKursusController::class, 'destroy'])->name('PengelolaanKursus.destroy');
    Route::put('/PengelolaanKursus/{kursus_id}', [PengelolaanKursusController::class, 'update'])->name('PengelolaanKursus.update');
    Route::post('/PengelolaanKursus', [PengelolaanKursusController::class, 'store'])->name('PengelolaanKursus.store');
    Route::get('/TambahKursus', [TambahKursusController::class, 'tambahKursus']);
    Route::get('/TambahKurikulum', [TambahKurikulumController::class, 'tambahKurikulum']);
// });






// Rute untuk halaman login admin
Route::get('/LoginAdmin', [LoginAdminController::class, 'loginAdmin'])->name('LoginAdmin');
Route::post('/LogindAdmin', [LoginAdminController::class, 'processLogin']);


// Route Admin
Route::middleware(['auth'])->group(function () {
    Route::post('/logout', [LoginAdminController::class, 'logout'])->name('logout');
    Route::get('/DashboardAdmin', [DashboardAdminController::class, 'dashboardAdmin'])->name('dashboard');
    Route::get('/DataAdmin', [DataAdminController::class, 'dataAdmin'])->name('admin.index');
    Route::get('/TambahAdmin', [DataAdminController::class, 'tambahAdmin']);
    Route::post('/admin/store', [DataAdminController::class, 'store'])->name('admin.store');
    Route::put('/DataAdmin/{admin_id}', [DataAdminController::class, 'update'])->name('PengelolaanAdmin.update');
    Route::delete('/DataAdmin/{admin_id}', [DataAdminController::class, 'destroy'])->name('PengelolaanAdmin.destroy');

    Route::get('/DataKursus', [DataKursusController::class, 'dataKursus'])->name('DataKursus');
    Route::delete('/kursus/{kursus_id}', [DataKursusController::class, 'destroy'])->name('kursus.destroy');

    Route::get('/DataPeserta', [DataPesertaController::class, 'dataPeserta'])->name('DataPeserta');
    Route::delete('/peserta/{pengguna_id}', [DataPesertaController::class, 'destroy'])->name('Peserta.destroy');

    Route::get('/DataPelatih', [DataPelatihController::class, 'dataPelatih'])->name('DataPelatih');
    Route::delete('/pelatih/{pengguna_id}', [DataPelatihController::class, 'destroy'])->name('Pelatih.destroy');

    Route::get('/DataRiwayatTransaksi', [DataRiwayatTransaksiController::class, 'dataRiwayatTransaksi'])->name('dataRiwayatTransaksi');
    Route::delete('/pembayaran/{pembayaran_id}', [DataRiwayatTransaksiController::class, 'destroy'])->name('pembayaran.destroy');

    Route::get('/PesanAdmin', [PesanAdminController::class, 'pesanAdmin']);
    Route::get('/PesertaKursus', [PesertaKursusController::class, 'pesertaKursus']);
    Route::get('/DetailPesertaKursus', [DetailPesertaKursusController::class, 'detailPesertaKursus']);
});
