<?php

use Illuminate\Support\Facades\Route;

// <!-- Rule Untuk Penaman Route,Controller & Class -->
// <!-- Route: Huruf depan kata pertama kapital (contoh: Main), dan untuk dua kata (contoh: MainAdmin). -->
// <!-- Controller: Gabungan dua kata, setiap kata diawali huruf kapital (contoh: MainController). -->
// <!-- Class: Jika dua kata, gunakan huruf kecil di awal setiap kata (contoh: mainAdmin). -->

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
use App\Http\Controllers\TambahKurikulumController;
use App\Http\Controllers\TambahKursusController;
use App\Http\Controllers\PesertaKursusController;
use App\Http\Controllers\DetailPesertaKursusController;

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



// Route Peserta
Route::get('/DashboardPeserta', [DashboardPesertaController::class, 'dashboardPeserta']);
Route::get('/Kursus', [KursusController::class, 'Kursus']);
Route::get('/KursusModul/{id_kursus}', [KursusController::class, 'kursusModul'])->name('kursusModul.show');
Route::get('/KursusMateri', [KursusController::class, 'kursusMateri'])->name('kursusMateri');
Route::get('/PesanPeserta', [PesanPesertaController::class, 'pesanPeserta']);
Route::get('/PengaturanPeserta', [PengaturanPesertaController::class, 'pengaturanPeserta']);
Route::get('/DaftarPelatihan', [DaftarPelatihanController::class, 'daftarPelatihan']);
Route::delete('/daftar-pelatihan/{pendaftaran_id}', [DaftarPelatihanController::class, 'destroy'])->name('DaftarPelatihan.destroy');

//Route Pelatih
Route::get('/DashboardPelatih', [DashboardPelatihController::class, 'dashboardPelatih']);
Route::get('/PesanPelatih', [PesanPelatihController::class, 'pesanPelatih']);
Route::get('/PengaturanPelatih', [PengaturanPelatihController::class, 'pengaturanPelatih']);
Route::get('/PengelolaanSertifikat', [PengelolaanSertifikatController::class, 'pengelolaanSertifikat'])->name('PengelolaanSertifikat');
Route::get('/TambahSertifikat', [PengelolaanSertifikatController::class, 'tambahSertifikat'])->name('TambahSertifikat');
Route::post('/tambah-sertifikat', [PengelolaanSertifikatController::class, 'store'])->name('sertifikat.store');
Route::get('/edit-sertifikat/{sertifikat_id}', [PengelolaanSertifikatController::class, 'editSertifikat'])->name('sertifikat.edit');
Route::put('/update-sertifikat/{sertifikat_id}', [PengelolaanSertifikatController::class, 'update'])->name('sertifikat.update');
Route::delete('/delete-sertifikat/{sertifikat_id}', [PengelolaanSertifikatController::class, 'destroy'])->name('sertifikat.delete');

Route::get('/EditSertifikat', [PengelolaanSertifikatController::class, 'editSertifikat'])
;
Route::get('/PengelolaanPelatihan', [PengelolaanPelatihanController::class, 'pengelolaanPelatihan']);
Route::get('/PengelolaanPelatihanDetail/{kursus_id}', [PengelolaanPelatihanController::class, 'pengelolaanPelatihanDetail'])->name('pengelolaanPelatihanDetail.show');
Route::delete('/pendaftaran/{pendaftaran_id}', [PengelolaanPelatihanController::class, 'destroy'])->name('Pendaftaran.destroy');
Route::put('/pendaftaran/{pendaftaran_id}', [PengelolaanPelatihanController::class, 'update'])->name('pendaftaran.update');

Route::get('/PengelolaanKursus', [PengelolaanKursusController::class, 'pengelolaanKursus'])->name('PengelolaanKursus');
Route::delete('/PengelolaanKursus/{kursus_id}', [PengelolaanKursusController::class, 'destroy'])->name('PengelolaanKursus.destroy');
// Route::get('/PengelolaanKursus/{kursus_id}', [PengelolaanKursusController::class, 'show'])->name('PengelolaanKursus.show');
Route::put('/PengelolaanKursus/{kursus_id}', [PengelolaanKursusController::class, 'update'])->name('PengelolaanKursus.update');
Route::post('/PengelolaanKursus', [PengelolaanKursusController::class, 'store'])->name('PengelolaanKursus.store');
Route::get('/TambahKursus', [TambahKursusController::class, 'tambahKursus']);
Route::get('/TambahKurikulum', [TambahKurikulumController::class, 'tambahKurikulum']);





// Route Admin
Route::get('/DashboardAdmin', [DashboardAdminController::class, 'dashboardAdmin']);
Route::get('/DataAdmin', [DataAdminController::class, 'dataAdmin']);
Route::get('/DataPeserta', [DataPesertaController::class, 'dataPeserta']);
Route::get('/DataPelatih', [DataPelatihController::class, 'dataPelatih']);
Route::get('/DataPembayaran', [DataPembayaranController::class, 'dataPembayaran']);
Route::get('/DataRiwayatTransaksi', [DataRiwayatTransaksiController::class, 'dataRiwayatTransaksi']);
Route::get('/PesanAdmin', [PesanAdminController::class, 'pesanAdmin']);
Route::get('/PesertaKursus', [PesertaKursusController::class, 'pesertaKursus']);
Route::get('/DetailPesertaKursus', [DetailPesertaKursusController::class, 'detailPesertaKursus']);


// // Rute untuk Data Pengguna
// Route::prefix('pengguna')->group(function () {
//     Route::get('/', [DataPengguna::class, 'index'])->name('pengguna.index'); // Menampilkan semua pengguna
//     Route::post('/storePengguna', [DataPengguna::class, 'store'])->name('pengguna.store'); // Menambah pengguna baru
//     Route::get('/showPengguna/{id}', [DataPengguna::class, 'show'])->name('pengguna.show'); // Menampilkan pengguna berdasarkan ID
//     Route::put('/updatePengguna/{id}', [DataPengguna::class, 'update'])->name('pengguna.update'); // Mengupdate pengguna
//     Route::delete('/destroyPengguna/{id}', [DataPengguna::class, 'destroy'])->name('pengguna.destroy'); // Menghapus pengguna
// });