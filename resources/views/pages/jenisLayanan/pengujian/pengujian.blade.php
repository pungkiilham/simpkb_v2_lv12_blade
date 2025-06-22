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
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <div>
                        <h1 class="text-xl md:text-2xl font-bold text-gray-800">Form Pengujian Kendaraan</h1>
                        <p class="text-sm text-gray-600 mt-1">Formulir pengujian kendaraan bermotor</p>
                    </div>
                </div>
                <a href="/pengujian"
                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg>
                    Kembali
                </a>
            </div>
        </div>

        <!-- Form verifikasi -->
        <div class="bg-white rounded-xl shadow-lg p-3 md:p-4 mb-8">

            <!-- Vehicle Information -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-4">
                <!-- Left Column -->
                <div class="space-y-6">
                    {{-- Data kendaraan --}}
                    @include('pages.jenisLayanan.pengujian.components.datakendaraan')
                </div>

                <!-- Right Column -->
                <div class="space-y-6">
                    {{-- Informasi hasil uji --}}
                    @include('pages.jenisLayanan.pengujian.components.rekapuji')
                </div>
            </div>
        </div>

        <!-- Form foto dan pra uji -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-4">
            <!-- Left Column -->
            <div class="space-y-6">
                {{-- Data kendaraan --}}
                @include('pages.jenisLayanan.pengujian.components.foto')
            </div>

            <!-- Right Column -->
            <div class="space-y-6">
                {{-- Informasi hasil uji --}}
                @include('pages.jenisLayanan.pengujian.components.prauji')
            </div>
        </div>

        <!-- Form emisi dan pitlift -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-4">
            <!-- Left Column -->
            <div class="space-y-6">
                {{-- Data kendaraan --}}
                @include('pages.jenisLayanan.pengujian.components.emisi')
            </div>

            <!-- Right Column -->
            <div class="space-y-6">
                {{-- Informasi hasil uji --}}
                @include('pages.jenisLayanan.pengujian.components.pitlift')
            </div>
        </div>

        <!-- Form lampu dan rem -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-4">
            <!-- Left Column -->
            <div class="space-y-6">
                {{-- Data kendaraan --}}
                @include('pages.jenisLayanan.pengujian.components.lampu')
            </div>

            <!-- Right Column -->
            <div class="space-y-6">
                {{-- Informasi hasil uji --}}
                @include('pages.jenisLayanan.pengujian.components.rem')
            </div>
        </div>

        <!-- Form kincup dan speedp -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-4">
            <!-- Left Column -->
            <div class="space-y-6">
                {{-- Data kendaraan --}}
                @include('pages.jenisLayanan.pengujian.components.kincup')
            </div>

            <!-- Right Column -->
            <div class="space-y-6">
                {{-- Informasi hasil uji --}}
                @include('pages.jenisLayanan.pengujian.components.speedo')
            </div>
        </div>

    </div>
    </div>
@endsection
