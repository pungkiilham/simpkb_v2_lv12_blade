<?php

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

// Master Kendaraan routes
Route::get('/semuakendaraan', function () {
    return view('pages.masterKendaraan.semua');
})->name('semuaKendaraan');

Route::get('/tambahkendaraan', function () {
    return view('pages.masterKendaraan.tambah');
})->name('tambahkendaraan');
Route::get('/ubahkendaraan', function () {
    return view('pages.masterKendaraan.ubah');
})->name('ubahkendaraan');
Route::get('/lihatkendaraan', function () {
    return view('pages.masterKendaraan.lihat');
})->name('lihatkendaraan');

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


//pengaturan
Route::get('/pengaturanuser', function () {
    return view('pages.pengaturan.user');
})->name('pengaturanuser');
Route::get('/pengaturanrole', function () {
    return view('pages.pengaturan.role');
})->name('pengaturanrole');
