@extends('layouts.admin')

@section('content')
    <div class="p-3 md:p-4 max-w-full">
        <!-- Header Section -->
        <div class="bg-white rounded-lg shadow-sm p-6 mb-6">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4 mb-4">
                <div class="flex items-center justify-start">
                    <div class="p-1.5 bg-gradient-to-r from-indigo-600 to-blue-500 rounded-lg mr-2">
                        <svg class="w-5 h-5 md:w-6 md:h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <div>
                        <h1 class="text-2xl font-bold text-gray-800 mb-2">Laporan Pelayanan</h1>
                        <p class="text-gray-600">Statistik dan Riwayat Pelayanan UPT PKB</p>
                    </div>
                </div>
                <div class="flex flex-wrap items-center gap-2">
                    <button
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-gradient-to-r from-blue-500 to-blue-600 rounded-lg hover:from-blue-600 hover:to-blue-700 transition-all shadow-sm">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                        </svg>
                        Export
                    </button>
                </div>
            </div>
        </div>



        <!-- Filter Section with Modal -->
        <div x-data="{
            isOpen: false,
            filters: {
                jenisKendaraan: [],
                jenisBahanBakar: [],
                statusAktif: [],
                statusUji: [],
                asalKendaraan: [],
                jenisLayanan: [],
                jenisPemilik: [],
                statusPengujian: []
            }
        }" class="bg-white rounded-lg shadow-sm p-6 mb-6">
            <div class="grid md:grid-cols-4 grid-cols-2 gap-4 items-end">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Mulai</label>
                    <input type="date"
                        class="w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Selesai</label>
                    <input type="date"
                        class="w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                </div>
                <button @click="isOpen = true"
                    class="flex items-center justify-center px-4 py-2 text-sm font-medium text-white bg-gradient-to-r from-blue-500 to-blue-600 rounded-lg hover:from-blue-600 hover:to-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z" />
                    </svg>
                    Filter
                </button>
                <button
                    class="flex-1 px-4 py-2 text-sm font-medium text-white bg-gradient-to-r from-blue-500 to-blue-600 rounded-lg hover:from-blue-600 hover:to-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    Tampilkan Data
                </button>
            </div>

            <!-- Modal -->
            <div x-show="isOpen" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 scale-95"
                x-transition:enter-end="opacity-100 scale-100" x-transition:leave="ease-in duration-200"
                x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
                class="fixed inset-0 z-50 overflow-y-auto" style="display: none;">
                <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:p-0">
                    <!-- Backdrop -->
                    <div class="fixed inset-0 transition-opacity" aria-hidden="true"
                        x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0"
                        x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200"
                        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                        <div class="absolute inset-0 bg-black bg-opacity-50 backdrop-blur-sm"></div>
                    </div>

                    <!-- Modal Panel -->
                    <div class="relative inline-block w-full max-w-4xl p-8 my-8 overflow-hidden text-left align-middle transition-all transform bg-white shadow-xl rounded-2xl"
                        @click.away="isOpen = false" x-transition:enter="ease-out duration-300"
                        x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                        x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                        x-transition:leave="ease-in duration-200"
                        x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                        x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
                        <!-- Modal Header -->
                        <div class="flex justify-between items-center mb-8">
                            <h3 class="text-xl font-bold text-gray-900">Filter Laporan Pelayanan</h3>
                            <button @click="isOpen = false"
                                class="text-gray-400 hover:text-gray-500 transition-colors duration-200">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>

                        <!-- Modal Content -->
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 p-6">
                            <!-- 1. Jenis Layanan Card -->
                            <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
                                <div class="bg-gray-50 px-3 border-b border-gray-100">
                                    <h4 class="font-semibold text-gray-900 flex items-center">
                                        <svg class="w-5 h-5 mr-2 text-blue-600" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                                        </svg>
                                        1. Jenis Layanan
                                    </h4>
                                </div>
                                <div class="p-1 space-y-1">
                                    <label
                                        class="flex items-center px-3 py-0.5 rounded-lg hover:bg-gray-50 transition-all duration-150 cursor-pointer">
                                        <input type="checkbox" x-model="filters.jenisKendaraan" value="mobil_penumpang"
                                            class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                        <span class="ml-3 text-gray-700">Semua</span>
                                    </label>
                                    <label
                                        class="flex items-center px-3 py-0.5 rounded-lg hover:bg-gray-50 transition-all duration-150 cursor-pointer">
                                        <input type="checkbox" x-model="filters.jenisKendaraan" value="mobil_penumpang"
                                            class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                        <span class="ml-3 text-gray-700">Baru</span>
                                    </label>
                                    <label
                                        class="flex items-center px-3 py-0.5 rounded-lg hover:bg-gray-50 transition-all duration-150 cursor-pointer">
                                        <input type="checkbox" x-model="filters.jenisKendaraan" value="mobil_bus"
                                            class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                        <span class="ml-3 text-gray-700">Berkala</span>
                                    </label>
                                    <label
                                        class="flex items-center px-3 py-0.5 rounded-lg hover:bg-gray-50 transition-all duration-150 cursor-pointer">
                                        <input type="checkbox" x-model="filters.jenisKendaraan" value="mobil_barang"
                                            class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                        <span class="ml-3 text-gray-700">Numpang Masuk</span>
                                    </label>
                                    <label
                                        class="flex items-center px-3 py-0.5 rounded-lg hover:bg-gray-50 transition-all duration-150 cursor-pointer">
                                        <input type="checkbox" x-model="filters.jenisKendaraan" value="mobil_barang"
                                            class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                        <span class="ml-3 text-gray-700">Numpang Keluar</span>
                                    </label>
                                    <label
                                        class="flex items-center px-3 py-0.5 rounded-lg hover:bg-gray-50 transition-all duration-150 cursor-pointer">
                                        <input type="checkbox" x-model="filters.jenisKendaraan" value="mobil_barang"
                                            class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                        <span class="ml-3 text-gray-700">Mutasi Masuk</span>
                                    </label>
                                    <label
                                        class="flex items-center px-3 py-0.5 rounded-lg hover:bg-gray-50 transition-all duration-150 cursor-pointer">
                                        <input type="checkbox" x-model="filters.jenisKendaraan" value="mobil_barang"
                                            class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                        <span class="ml-3 text-gray-700">Mutasi Keluar</span>
                                    </label>
                                    <label
                                        class="flex items-center px-3 py-0.5 rounded-lg hover:bg-gray-50 transition-all duration-150 cursor-pointer">
                                        <input type="checkbox" x-model="filters.jenisKendaraan" value="mobil_barang"
                                            class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                        <span class="ml-3 text-gray-700">Perubahan</span>
                                    </label>
                                    <label
                                        class="flex items-center px-3 py-0.5 rounded-lg hover:bg-gray-50 transition-all duration-150 cursor-pointer">
                                        <input type="checkbox" x-model="filters.jenisKendaraan" value="mobil_barang"
                                            class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                        <span class="ml-3 text-gray-700">Cetak Ulang</span>
                                    </label>
                                </div>
                            </div>

                            <!-- 2. Asal Kendaraan Card -->
                            <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
                                <div class="bg-gray-50 px-3 border-b border-gray-100">
                                    <h4 class="font-semibold text-gray-900 flex items-center">
                                        <svg class="w-5 h-5 mr-2 text-blue-600" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                                        </svg>
                                        2. Asal Kendaraan
                                    </h4>
                                </div>
                                <div class="p-1 space-y-1">
                                    <label
                                        class="flex items-center px-3 py-0.5 rounded-lg hover:bg-gray-50 transition-all duration-150 cursor-pointer">
                                        <input type="checkbox" x-model="filters.jenisKendaraan" value="mobil_penumpang"
                                            class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                        <span class="ml-3 text-gray-700">Semua</span>
                                    </label>
                                    <label
                                        class="flex items-center px-3 py-0.5 rounded-lg hover:bg-gray-50 transition-all duration-150 cursor-pointer">
                                        <input type="checkbox" x-model="filters.jenisKendaraan" value="mobil_penumpang"
                                            class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                        <span class="ml-3 text-gray-700">Batu</span>
                                    </label>
                                    <label
                                        class="flex items-center px-3 py-0.5 rounded-lg hover:bg-gray-50 transition-all duration-150 cursor-pointer">
                                        <input type="checkbox" x-model="filters.jenisKendaraan" value="mobil_bus"
                                            class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                        <span class="ml-3 text-gray-700">Numpang Uji</span>
                                    </label>
                                </div>
                            </div>

                            <!-- 3. Jenis Kendaraan Card -->
                            <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
                                <div class="bg-gray-50 px-3 border-b border-gray-100">
                                    <h4 class="font-semibold text-gray-900 flex items-center">
                                        <svg class="w-5 h-5 mr-2 text-blue-600" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                                        </svg>
                                        3. Jenis Kendaraan
                                    </h4>
                                </div>
                                <div class="p-1 space-y-1">
                                    <label
                                        class="flex items-center px-3 py-0.5 rounded-lg hover:bg-gray-50 transition-all duration-150 cursor-pointer">
                                        <input type="checkbox" x-model="filters.jenisKendaraan" value="mobil_penumpang"
                                            class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                        <span class="ml-3 text-gray-700">Semua</span>
                                    </label>
                                    <label
                                        class="flex items-center px-3 py-0.5 rounded-lg hover:bg-gray-50 transition-all duration-150 cursor-pointer">
                                        <input type="checkbox" x-model="filters.jenisKendaraan" value="mobil_penumpang"
                                            class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                        <span class="ml-3 text-gray-700">Mobil Penumpang</span>
                                    </label>
                                    <label
                                        class="flex items-center px-3 py-0.5 rounded-lg hover:bg-gray-50 transition-all duration-150 cursor-pointer">
                                        <input type="checkbox" x-model="filters.jenisKendaraan" value="mobil_bus"
                                            class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                        <span class="ml-3 text-gray-700">Mobil Bus</span>
                                    </label>
                                    <label
                                        class="flex items-center px-3 py-0.5 rounded-lg hover:bg-gray-50 transition-all duration-150 cursor-pointer">
                                        <input type="checkbox" x-model="filters.jenisKendaraan" value="mobil_barang"
                                            class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                        <span class="ml-3 text-gray-700">Mobil Barang</span>
                                    </label>
                                </div>
                            </div>

                            <!-- 4. Jenis Bahan Bakar Card -->
                            <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
                                <div class="bg-gray-50 px-3 border-b border-gray-100">
                                    <h4 class="font-semibold text-gray-900 flex items-center">
                                        <svg class="w-5 h-5 mr-2 text-blue-600" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                                        </svg>
                                        4. Jenis Bahan Bakar
                                    </h4>
                                </div>
                                <div class="p-1 space-y-1">
                                    <label
                                        class="flex items-center px-3 py-0.5 rounded-lg hover:bg-gray-50 transition-all duration-150 cursor-pointer">
                                        <input type="checkbox" x-model="filters.jenisKendaraan" value="mobil_penumpang"
                                            class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                        <span class="ml-3 text-gray-700">Semua</span>
                                    </label>
                                    <label
                                        class="flex items-center px-3 py-0.5 rounded-lg hover:bg-gray-50 transition-all duration-150 cursor-pointer">
                                        <input type="checkbox" x-model="filters.jenisKendaraan" value="mobil_penumpang"
                                            class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                        <span class="ml-3 text-gray-700">Bensin</span>
                                    </label>
                                    <label
                                        class="flex items-center px-3 py-0.5 rounded-lg hover:bg-gray-50 transition-all duration-150 cursor-pointer">
                                        <input type="checkbox" x-model="filters.jenisKendaraan" value="mobil_bus"
                                            class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                        <span class="ml-3 text-gray-700">Solar</span>
                                    </label>
                                </div>
                            </div>

                            <!-- 5. Status Aktif Card -->
                            <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
                                <div class="bg-gray-50 px-3 border-b border-gray-100">
                                    <h4 class="font-semibold text-gray-900 flex items-center">
                                        <svg class="w-5 h-5 mr-2 text-blue-600" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                                        </svg>
                                        5. Status Aktif
                                    </h4>
                                </div>
                                <div class="p-1 space-y-1">
                                    <label
                                        class="flex items-center px-3 py-0.5 rounded-lg hover:bg-gray-50 transition-all duration-150 cursor-pointer">
                                        <input type="checkbox" x-model="filters.jenisKendaraan" value="mobil_penumpang"
                                            class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                        <span class="ml-3 text-gray-700">Semua</span>
                                    </label>
                                    <label
                                        class="flex items-center px-3 py-0.5 rounded-lg hover:bg-gray-50 transition-all duration-150 cursor-pointer">
                                        <input type="checkbox" x-model="filters.jenisKendaraan" value="mobil_penumpang"
                                            class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                        <span class="ml-3 text-gray-700">Aktif</span>
                                    </label>
                                    <label
                                        class="flex items-center px-3 py-0.5 rounded-lg hover:bg-gray-50 transition-all duration-150 cursor-pointer">
                                        <input type="checkbox" x-model="filters.jenisKendaraan" value="mobil_bus"
                                            class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                        <span class="ml-3 text-gray-700">Tidak Aktif</span>
                                    </label>
                                </div>
                            </div>

                            <!-- 6. Status Uji Card (lulus/TL)-->
                            <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
                                <div class="bg-gray-50 px-3 border-b border-gray-100">
                                    <h4 class="font-semibold text-gray-900 flex items-center">
                                        <svg class="w-5 h-5 mr-2 text-blue-600" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                                        </svg>
                                        6. Hasil Uji
                                    </h4>
                                </div>
                                <div class="p-1 space-y-1">
                                    <label
                                        class="flex items-center px-3 py-0.5 rounded-lg hover:bg-gray-50 transition-all duration-150 cursor-pointer">
                                        <input type="checkbox" x-model="filters.jenisKendaraan" value="mobil_penumpang"
                                            class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                        <span class="ml-3 text-gray-700">Semua</span>
                                    </label>
                                    <label
                                        class="flex items-center px-3 py-0.5 rounded-lg hover:bg-gray-50 transition-all duration-150 cursor-pointer">
                                        <input type="checkbox" x-model="filters.jenisKendaraan" value="mobil_penumpang"
                                            class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                        <span class="ml-3 text-gray-700">Lulus</span>
                                    </label>
                                    <label
                                        class="flex items-center px-3 py-0.5 rounded-lg hover:bg-gray-50 transition-all duration-150 cursor-pointer">
                                        <input type="checkbox" x-model="filters.jenisKendaraan" value="mobil_bus"
                                            class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                        <span class="ml-3 text-gray-700">Tidak Lulus</span>
                                    </label>
                                    <label
                                        class="flex items-center px-3 py-0.5 rounded-lg hover:bg-gray-50 transition-all duration-150 cursor-pointer">
                                        <input type="checkbox" x-model="filters.jenisKendaraan" value="mobil_barang"
                                            class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                        <span class="ml-3 text-gray-700">Belum/Pulang</span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="mt-6 flex justify-end space-x-3">
                            <button @click="Object.keys(filters).forEach(key => filters[key] = [])"
                                class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50">
                                Reset
                            </button>
                            <button @click="isOpen = false"
                                class="px-4 py-2 text-sm font-medium text-white bg-gradient-to-r from-blue-500 to-blue-600 rounded-lg hover:from-blue-600 hover:to-blue-700">
                                Terapkan Filter
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Table Section -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">No. Antrian</th>
                            <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">Tanggal</th>
                            <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">No. Kendaraan
                            </th>
                            <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">Jenis Layanan
                            </th>
                            <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">Durasi</th>
                            <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">Status</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-center text-sm text-gray-900">A-001</td>
                            <td class="px-6 py-4 text-center text-sm text-gray-900">2024-01-20</td>
                            <td class="px-6 py-4 text-center text-sm text-gray-900">B 1234 CD</td>
                            <td class="px-6 py-4 text-center text-sm text-gray-900">Uji Berkala</td>
                            <td class="px-6 py-4 text-center text-sm text-gray-900">45 Menit</td>
                            <td class="px-6 py-4 text-center text-sm">
                                <span
                                    class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">Selesai</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Pagination -->
        <div class="flex items-center justify-between mt-4">
            <div class="flex items-center">
                <label class="text-sm text-gray-600 mr-2">Baris per halaman:</label>
                <select
                    class="text-sm border border-gray-200 rounded-lg py-2 px-3 focus:outline-none focus:ring-2 focus:ring-blue-500/20">
                    <option>25</option>
                    <option>50</option>
                    <option>100</option>
                </select>
            </div>
            <div class="flex items-center space-x-2">
                <button
                    class="px-3 py-1 text-sm text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 disabled:opacity-50"
                    disabled>
                    Previous
                </button>
                <div class="text-sm text-gray-500">Page 1 of 1</div>
                <button
                    class="px-3 py-1 text-sm text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 disabled:opacity-50"
                    disabled>
                    Next
                </button>
            </div>
        </div>
    </div>
@endsection

{{-- <!-- Status Uji Card -->
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="bg-gray-50 px-6 py-4 border-b border-gray-100">
            <h4 class="font-semibold text-gray-900 flex items-center">
                <svg class="w-5 h-5 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                Status Uji
            </h4>
        </div>
        <div class="p-6 space-y-2">
            <label class="flex items-center p-3 rounded-lg hover:bg-gray-50 transition-all duration-150 cursor-pointer">
                <input type="checkbox" x-model="filters.statusUji" value="hidup" class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                <span class="ml-3 text-gray-700">Hidup</span>
            </label>
            <label class="flex items-center p-3 rounded-lg hover:bg-gray-50 transition-all duration-150 cursor-pointer">
                <input type="checkbox" x-model="filters.statusUji" value="mati" class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                <span class="ml-3 text-gray-700">Mati Uji</span>
            </label>
        </div>
    </div>

    <!-- Asal Kendaraan Card -->
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="bg-gray-50 px-6 py-4 border-b border-gray-100">
            <h4 class="font-semibold text-gray-900 flex items-center">
                <svg class="w-5 h-5 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                Asal Kendaraan
            </h4>
        </div>
        <div class="p-6 space-y-2">
            <label class="flex items-center p-3 rounded-lg hover:bg-gray-50 transition-all duration-150 cursor-pointer">
                <input type="checkbox" x-model="filters.asalKendaraan" value="dalam_daerah" class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                <span class="ml-3 text-gray-700">Dalam Daerah</span>
            </label>
            <label class="flex items-center p-3 rounded-lg hover:bg-gray-50 transition-all duration-150 cursor-pointer">
                <input type="checkbox" x-model="filters.asalKendaraan" value="luar_daerah" class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                <span class="ml-3 text-gray-700">Luar Daerah</span>
            </label>
        </div>
    </div>

    <!-- Jenis Layanan Card -->
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="bg-gray-50 px-6 py-4 border-b border-gray-100">
            <h4 class="font-semibold text-gray-900 flex items-center">
                <svg class="w-5 h-5 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
                Jenis Layanan
            </h4>
        </div>
        <div class="p-6 space-y-2">
            <label class="flex items-center p-3 rounded-lg hover:bg-gray-50 transition-all duration-150 cursor-pointer">
                <input type="checkbox" x-model="filters.jenisLayanan" value="uji_berkala" class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                <span class="ml-3 text-gray-700">Uji Berkala</span>
            </label>
            <label class="flex items-center p-3 rounded-lg hover:bg-gray-50 transition-all duration-150 cursor-pointer">
                <input type="checkbox" x-model="filters.jenisLayanan" value="numpang_uji" class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                <span class="ml-3 text-gray-700">Numpang Uji</span>
            </label>
            <label class="flex items-center p-3 rounded-lg hover:bg-gray-50 transition-all duration-150 cursor-pointer">
                <input type="checkbox" x-model="filters.jenisLayanan" value="mutasi_masuk" class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                <span class="ml-3 text-gray-700">Mutasi Masuk</span>
            </label>
            <label class="flex items-center p-3 rounded-lg hover:bg-gray-50 transition-all duration-150 cursor-pointer">
                <input type="checkbox" x-model="filters.jenisLayanan" value="mutasi_keluar" class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                <span class="ml-3 text-gray-700">Mutasi Keluar</span>
            </label>
        </div>
    </div>

    <!-- Jenis Pemilik Card -->
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="bg-gray-50 px-6 py-4 border-b border-gray-100">
            <h4 class="font-semibold text-gray-900 flex items-center">
                <svg class="w-5 h-5 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>
                Jenis Pemilik
            </h4>
        </div>
        <div class="p-6 space-y-2">
            <label class="flex items-center p-3 rounded-lg hover:bg-gray-50 transition-all duration-150 cursor-pointer">
                <input type="checkbox" x-model="filters.jenisPemilik" value="perorangan" class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                <span class="ml-3 text-gray-700">Perorangan</span>
            </label>
            <label class="flex items-center p-3 rounded-lg hover:bg-gray-50 transition-all duration-150 cursor-pointer">
                <input type="checkbox" x-model="filters.jenisPemilik" value="badan_usaha" class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                <span class="ml-3 text-gray-700">Badan Usaha</span>
            </label>
        </div>
    </div>

    <!-- Status Pengujian Card -->
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="bg-gray-50 px-6 py-4 border-b border-gray-100">
            <h4 class="font-semibold text-gray-900 flex items-center">
                <svg class="w-5 h-5 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                </svg>
                Status Pengujian
            </h4>
        </div>
        <div class="p-6 space-y-2">
            <label class="flex items-center p-3 rounded-lg hover:bg-gray-50 transition-all duration-150 cursor-pointer">
                <input type="checkbox" x-model="filters.statusPengujian" value="lulus" class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                <span class="ml-3 text-gray-700">Lulus</span>
            </label>
            <label class="flex items-center p-3 rounded-lg hover:bg-gray-50 transition-all duration-150 cursor-pointer">
                <input type="checkbox" x-model="filters.statusPengujian" value="tidak_lulus" class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                <span class="ml-3 text-gray-700">Tidak Lulus</span>
            </label>
        </div>
    </div>
</div>
@endsection --}}
