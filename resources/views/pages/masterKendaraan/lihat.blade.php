@extends('layouts.admin')

@section('content')
    <div class="p-3 md:p-4 max-w-full">
        <!-- Header -->
        <div class="bg-white rounded-xl shadow-lg p-3 md:p-4 mb-4">
            <!-- Title and Back Button -->
            <div class="flex items-center justify-between mb-4">
                <div class="flex items-center">
                    <div class="p-1.5 bg-gradient-to-r from-indigo-600 to-blue-500 rounded-lg mr-2">
                        <svg class="w-5 h-5 md:w-6 md:h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0" />
                        </svg>
                    </div>
                    <div>
                        <h1 class="text-xl md:text-2xl font-bold text-gray-800">Detail Data Kendaraan</h1>
                        <p class="text-sm text-gray-600 mt-1">Informasi lengkap kendaraan uji</p>
                    </div>
                </div>
                <a href="{{ route('kendaraan.index') }}"
                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg>
                    Kembali
                </a>
            </div>
        </div>

        <!-- Detail Section -->
        <div class="bg-white rounded-xl shadow-lg p-3 md:p-6">
            {{-- Data kendaraan akan ditampilkan di sini --}}
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-10">
                <!-- Left Column -->
                <div class="space-y-6">
                    @include('pages.masterKendaraan.components.lihat1', ['kendaraan' => $kendaraan])
                </div>

                <!-- Right Column -->
                <div class="space-y-6">
                    @include('pages.masterKendaraan.components.lihat2', ['kendaraan' => $kendaraan])
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-10">
                <!-- Left Column -->
                <div class="space-y-6">
                    @include('pages.masterKendaraan.components.lihat3', ['kendaraan' => $kendaraan])
                </div>

                <!-- Right Column -->
                <div class="space-y-6">
                    @include('pages.masterKendaraan.components.lihat4', ['kendaraan' => $kendaraan])
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex justify-end pt-6 border-t mt-4 gap-2">
                <a href="{{ route('kendaraan.edit', $kendaraan->kendaraan_id) }}"
                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-gradient-to-r from-emerald-600 to-emerald-700 rounded-lg hover:from-emerald-700 hover:to-emerald-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-500 shadow-sm">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                    </svg>
                    Edit Data
                </a>
                <a href="{{ route('kendaraan.exportPdf', $kendaraan->kendaraan_id) }}"
                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-gradient-to-r from-purple-600 to-purple-700 rounded-lg hover:from-purple-700 hover:to-purple-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500 shadow-sm"
                    target="_blank"> {{-- target="_blank" agar PDF dibuka di tab baru --}}
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                    </svg>
                    Export PDF
                </a>
            </div>
        </div>
    </div>
@endsection