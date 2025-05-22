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

Route::get('/semuakendaraan', function () {
    return view('pages.masterKendaraan.semua');
})->name('semuaKendaraan');

Route::get('/tambahkendaraan', function () {
    return view('pages.masterKendaraan.tambah');
})->name('tambahkendaraan');
