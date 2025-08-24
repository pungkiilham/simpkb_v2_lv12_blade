<?php

use App\Http\Controllers\KendaraanController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

// Login routes
Route::get('/login', function () {
    return view('pages.auth.login');
})->name('login');

Route::get('/dashboard', function () {
    return view('pages.dashboard');
})->name('dashboard');


//antiran kendaraan
Route::get('/antrian', function () {
    return view('pages.antrian.display');
})->name('antrian');
Route::get('/dashboardantrian', function () {
    return view('pages.antrian.dashboard');
})->name('dashboardantrian');
Route::get('/cetakantrian', function () {
    return view('pages.antrian.cetak');
})->name('cetakantrian');
Route::get('/panggilantrian', function () {
    return view('pages.antrian.panggil');
})->name('panggildantrian');

//Master kendaraan route ai
Route::get('/kendaraan', [KendaraanController::class, 'showCombinedKendaraanData'])->name('kendaraan.index');
Route::get('/kendaraan/{kendaraanId}', [KendaraanController::class, 'showSpecificKendaraanData'])->name('kendaraan.show');
Route::get('/kendaraan/{kendaraanId}/edit', function($kendaraanId) { /* Your edit form view logic */ })->name('kendaraan.edit'); // Placeholder for edit form
Route::post('/kendaraan', [KendaraanController::class, 'store'])->name('kendaraan.store');
Route::put('/kendaraan/{kendaraanId}', [KendaraanController::class, 'update'])->name('kendaraan.update');
Route::delete('/kendaraan/{kendaraanId}', [KendaraanController::class, 'destroy'])->name('kendaraan.destroy');
Route::get('/kendaraan/export/all-csv', [KendaraanController::class, 'exportAllKendaraanData'])->name('kendaraan.exportAllCsv');
Route::get('/kendaraan/{kendaraanId}/export-pdf', [KendaraanController::class, 'exportSpecificKendaraanToPdf'])->name('kendaraan.exportPdf');

// Master Kendaraan routes
// Route::get('/semuakendaraan', function () {
//     return view('pages.masterKendaraan.semua');
// })->name('semuaKendaraan');

Route::get('/tambahkendaraan', function () {
    return view('pages.masterKendaraan.tambah');
})->name('tambahkendaraan');
Route::get('/ubahkendaraan', function () {
    return view('pages.masterKendaraan.ubah');
})->name('ubahkendaraan');
// Route::get('/lihatkendaraan', function () {
//     return view('pages.masterKendaraan.lihat');
// })->name('lihatkendaraan');

// Jenis layanan routes
// pendaftaran
Route::get('/pendaftaran', function () {
    return view('pages.jenisLayanan.pendaftaran.pendaftaran');
})->name('pendaftaran');
Route::get('/listpendaftaran', function () {
    return view('pages.jenisLayanan.pendaftaran.listPendaftaran');
})->name('listpendaftaran');

// pengujian
Route::get('/listpengujian', function () {
    return view('pages.jenisLayanan.pengujian.listPengujian');
})->name('listpengujian');
Route::get('/pengujian', function () {
    return view('pages.jenisLayanan.pengujian.pengujian');
})->name('pengujian');
Route::get('/pengujianlulus', function () {
    return view('pages.jenisLayanan.pengujian.pengujianlulus');
})->name('pengujianlulus');

// numpang keluar
Route::get('/cetaknumpang', function () {
    return view('pages.jenisLayanan.numpang.cetak');
})->name('cetaknumpang');
Route::get('/listnumpang', function () {
    return view('pages.jenisLayanan.numpang.listNumpang');
})->name('listNumpang');

// Mutasi
Route::get('/cetakmutasi', function () {
    return view('pages.jenisLayanan.mutasi.cetak');
})->name('cetakmutasi');
Route::get('/listmutasi', function () {
    return view('pages.jenisLayanan.mutasi.listMutasi');
})->name('listmutasi');

// perubahan
Route::get('/cetakperubahan', function () {
    return view('pages.jenisLayanan.perubahan.cetak');
})->name('cetakmutasi');
Route::get('/listperubahan', function () {
    return view('pages.jenisLayanan.perubahan.listPerubahan');
})->name('listperubahan');

// Mutasi
Route::get('/cetakulang', function () {
    return view('pages.jenisLayanan.cetakUlang.cetak');
})->name('cetakmutasi');
Route::get('/listcetakulang', function () {
    return view('pages.jenisLayanan.cetakUlang.listCetak');
})->name('listcetakulang');


//ikm
Route::get('/pengaturanikm', function () {
    return view('pages.ikm.pengaturan');
})->name('pengaturanikm');
Route::get('/ikm', function () {
    return view('pages.ikm.ikm');
})->name('ikm');

//wa notif
Route::get('/wa', function () {
    return view('pages.wa.wa');
})->name('wa');
Route::get('/pengaturanwa', function () {
    return view('pages.wa.pengaturan');
})->name('pengaturanwa');


//laporan
Route::get('/riwayat', function () {
    return view('pages.laporan.riwayat');
})->name('riwayat');
Route::get('/lihatriwayat', function () {
    return view('pages.laporan.lihatriwayat');
})->name('lihatriwayat');
Route::get('/laporanpelayanan', function () {
    return view('pages.laporan.pelayanan');
})->name('laporanpelayanan');
Route::get('/laporanikm', function () {
    return view('pages.laporan.ikm');
})->name('laporanikm');
Route::get('/logaktivitas', function () {
    return view('pages.laporan.logaktivitas');
})->name('logaktivitas');


//pengaturan
Route::get('/pengaturanuser', function () {
    return view('pages.pengaturan.user');
})->name('pengaturanuser');
Route::get('/pengaturanrole', function () {
    return view('pages.pengaturan.role');
})->name('pengaturanrole');
Route::get('/roleview', function () {
    return view('pages.pengaturan.roleView');
})->name('roleview');
