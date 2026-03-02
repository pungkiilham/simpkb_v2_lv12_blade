@extends('layouts.admin')

@section('content')
    <div class="p-3 md:p-4 max-w-full">
        <!-- Header Section -->
        <div class="bg-white rounded-xl shadow-lg p-3 md:p-4 mb-4">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4 mb-4">
                <div class="flex items-center">
                    <div class="p-1.5 bg-gradient-to-r from-indigo-600 to-blue-500 rounded-lg mr-2">
                        <svg class="w-5 h-5 md:w-6 md:h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                    </div>
                    <div>
                        <h1 class="text-xl md:text-2xl font-bold text-gray-800">Pendaftaran Pengujian Kendaraan</h1>
                        <p class="text-sm text-gray-600 mt-1">Form pendaftaran pengujian kendaraan bermotor</p>
                    </div>
                </div>
                <a href="/listpendaftaran"
                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg>
                    Kembali
                </a>
            </div>
        </div>

        <!-- Main Content -->
        <div class="bg-white rounded-xl shadow-lg p-3 md:p-4">


            <!-- Form Pendaftaran Section -->
            <form action="{{ route('pendaftaran.store') }}" method="POST" class="space-y-6">
                @csrf
                <div class="p-3 md:p-4 mb-8">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <!-- Left Column: Data Pemilik -->
                        <div class="">
                            <div
                                class="flex justify-between items-center bg-gradient-to-r from-indigo-600 to-blue-500 rounded-lg px-2 py-1 mb-4">
                                <h2 class="text-lg font-bold text-white">1. Data Kendaraan</h2>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label for="nama_pemilik" class="block text-sm font-medium text-gray-700 mb-1">Nama
                                        Pemilik</label>
                                    <input type="text" name="nama_pemilik" id="nama_pemilik"
                                        class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2"
                                        placeholder="Masukkan nama pemilik">
                                </div>
                                                                <div>
                                    <label for="nomor_whatsapp" class="block text-sm font-medium text-gray-700 mb-1">Jenis
                                        Rekom</label>
                                    <input type="tel" name="nomor_whatsapp" id="nomor_whatsapp"
                                        class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2"
                                        placeholder="Masukkan nomor WhatsApp">
                                </div>
                                <div>
                                    <label for="nomor_ktp"
                                        class="block text-sm font-medium text-gray-700 mb-1">Nopol</label>
                                    <input type="text" name="nomor_ktp" id="nomor_ktp"
                                        class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2"
                                        placeholder="Masukkan nomor KTP">
                                </div>
                                <div>
                                    <label for="nomor_ktp" class="block text-sm font-medium text-gray-700 mb-1">No
                                        Uji</label>
                                    <input type="text" name="nomor_ktp" id="nomor_ktp"
                                        class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2"
                                        placeholder="Masukkan nomor KTP">
                                </div>
                                <div>
                                    <label for="nomor_whatsapp" class="block text-sm font-medium text-gray-700 mb-1">Daerah
                                        Asal</label>
                                    <input type="tel" name="nomor_whatsapp" id="nomor_whatsapp"
                                        class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2"
                                        placeholder="Masukkan nomor WhatsApp">
                                </div>
                                <div>
                                    <label for="nomor_whatsapp" class="block text-sm font-medium text-gray-700 mb-1">Daerah
                                        Tujuan</label>
                                    <input type="tel" name="nomor_whatsapp" id="nomor_whatsapp"
                                        class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2"
                                        placeholder="Masukkan nomor WhatsApp">
                                </div>
                            </div>
                        </div>

                        <!-- Right Column: Data Kendaraan -->
                        <div class="">
                            <!-- Sertifikasi Kendaraan -->
                            <div class="space-y-6">
                                <h2
                                    class="text-lg font-bold text-white px-2 py-1 bg-gradient-to-r from-indigo-600 to-blue-500 rounded-lg">
                                    2. Status Rekom</h2>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <!-- Status Display -->
                                    <div class="md:col-span-2 space-y-4">
                                        <div class="grid grid-cols-2 gap-4">
                                            <div>
                                                <label class="block text-sm font-medium text-gray-700 mb-1">Nama
                                                    Verifikator</label>
                                                <input type="text" name="verifikator_name" value="-"
                                                    class="w-full rounded-lg border-2 border-gray-300 bg-gray-100 py-1 px-2 focus:outline-none"
                                                    readonly>
                                            </div>
                                            <div>
                                                <label class="block text-sm font-medium text-gray-700 mb-1">Status
                                                    Rekom</label>
                                                <input type="text" name="status_uji" value="Sudah Diverifikasi"
                                                    class="w-full rounded-lg border-2 border-gray-300 bg-gray-100 py-1 px-2 font-bold text-gray-800 focus:outline-none"
                                                    readonly>
                                            </div>
                                            <div>
                                                <label for="nomor_whatsapp" class="block text-sm font-medium text-gray-700 mb-1">Tanggal Verifikasi</label>
                                                <input type="text" name="status_uji" value=""
                                                    class="w-full rounded-lg border-2 border-gray-300 bg-gray-100 py-1 px-2 font-bold text-gray-800 focus:outline-none"
                                                    readonly>
                                            </div>
                                            <div>
                                                <label for="nomor_whatsapp" class="block text-sm font-medium text-gray-700 mb-1">Waktu Verifikasi</label>
                                                <input type="text" name="status_uji" value=""
                                                    class="w-full rounded-lg border-2 border-gray-300 bg-gray-100 py-1 px-2 font-bold text-gray-800 focus:outline-none"
                                                    readonly>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Action Buttons for Verifikator -->
                                    <div class="md:col-span-2 space-y-4">
                                        <div class="flex flex-col sm:flex-row gap-4">
                                            <!-- Verifikasi button is disabled until all penguji approve -->
                                            <button type="button"
                                                class="flex-1 inline-flex items-center justify-center px-4 py-2 text-sm font-medium text-white rounded-lg bg-gradient-to-r from-emerald-600 to-emerald-700 hover:from-emerald-700 hover:to-emerald-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 shadow-sm transition-transform transform hover:scale-105 disabled:opacity-50 disabled:cursor-not-allowed">
                                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M5 13l4 4L19 7" />
                                                </svg>
                                                Verifikasi
                                            </button>

                                            <button type="button"
                                                class="flex-1 inline-flex items-center justify-center px-4 py-2 text-sm font-medium text-white bg-gradient-to-r from-red-600 to-red-700 rounded-lg hover:from-red-700 hover:to-red-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 shadow-sm transition-transform transform hover:scale-105">
                                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M6 18 18 6M6 6l12 12" />
                                                </svg>
                                                Ditolak
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
