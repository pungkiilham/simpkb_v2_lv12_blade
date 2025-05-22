<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home2');
});


//LOGIN & LOGOUT
Route::get('/login', function () {
    return view('login');
});





//DASHBOARD
Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
});
Route::get('/dashboard-antrian', function () {
    return view('dashboard.dashboard-antrian');
});

//DAFTAR KARYAWAN
Route::get('/daftar-karyawan', function () {
    return view('daftar-karyawan.daftar-karyawan');
});


//DATABASE KENDARAAN
Route::get('/daftar-kendaraan', function () {
    return view('database-kendaraan.daftar-kendaraan');
});
Route::get('/detail-kendaraan', function () {
    return view('database-kendaraan.detail-kendaraan');
});
Route::get('/ubahdata-kendaraan', function () {
    return view('database-kendaraan.ubahdata-kendaraan');
});
Route::get('/buatdata-kendaraan', function () {
    return view('database-kendaraan.buatdata-kendaraan');
});
Route::get('/buatdata2-kendaraan', function () {
    return view('database-kendaraan.buatdata2-kendaraan');
});

//ANTRIAN
Route::get('/cetak-antrian', function () {
    return view('antrian.cetak-antrian');
});
Route::get('/display-antrian', function () {
    return view('antrian.display-antrian');
});
Route::get('/panggil-antrian', function () {
    return view('antrian.panggil-antrian');
});
//BG raras
Route::get('/display-antrianwhite', function () {
    return view('antrian.display-antrianwhite');
});
Route::get('/cetak-antrianwhite', function () {
    return view('antrian.cetak-antrianwhite');
});

//PENDAFTARAN
Route::get('/daftarharian-kendaraan', function () {
    return view('pendaftaran.daftarharian-kendaraan');
});
Route::get('/pendaftaran-kendaraan', function () {
    return view('pendaftaran.pendaftaran-kendaraan');
});
Route::get('/riwayat-pendaftaran', function () {
    return view('pendaftaran.riwayatpendaftaran-kendaraan');
});

//PENGUJIAN
Route::get('/daftarsiapuji-harian', function () {
    return view('pengujian.daftarsiapuji-harian');
});
Route::get('/pengujian', function () {
    return view('pengujian.pengujian-kendaraan');
});
Route::get('/aktifitaspengujian', function () {
    return view('pengujian.aktifitaspengujian-harian');
});


//RIWAYAT PENGUJIAN
Route::get('/riwayat-uji', function () {
    return view('riwayat-uji.riwayatuji-kendaraan');
});
Route::get('/lihat-riwayatuji', function () {
    return view('riwayat-uji.lihat-riwayatuji');
});


//LAPORAN PENGUJIAN
Route::get('/laporan-harian', function () {
    return view('laporan.laporan-harian');
});
Route::get('/laporan-mingguan', function () {
    return view('laporan.laporan-mingguan');
});
Route::get('/laporan-bulanan', function () {
    return view('laporan.laporan-bulanan');
});

//WA BLAST
Route::get('/wa-blast', function () {
    return view('wa-blast.targetwa');
});
Route::get('/riwayat-blast', function () {
    return view('wa-blast.riwayatwa');
});
Route::get('/detail-riwayat-blast', function () {
    return view('wa-blast.detail-riwayatwa');
});
Route::get('/pengaturanwa', function () {
    return view('wa-blast.pengaturanwa');
});

//LOG AKTIVITAS
Route::get('/log-aktivitas', function () {
    return view('log-aktivitas.log-aktivitas');
});
