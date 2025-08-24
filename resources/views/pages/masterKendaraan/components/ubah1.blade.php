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
                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                        </svg>
                    </div>
                    <div>
                        <h1 class="text-xl md:text-2xl font-bold text-gray-800">Edit Data Kendaraan</h1>
                        <p class="text-sm text-gray-600 mt-1">Mengubah data kendaraan spesifik</p>
                    </div>
                </div>
                {{-- Menggunakan route() helper untuk link kembali ke daftar semua kendaraan --}}
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

        <!-- Form Section -->
        <div class="bg-white rounded-xl shadow-lg p-3 md:p-6">
            {{-- Form action menunjuk ke route 'kendaraan.update' dengan ID kendaraan --}}
            <form action="{{ route('kendaraan.update', $kendaraan->kendaraan_id) }}" method="POST">
                @csrf
                @method('PUT') {{-- PENTING: Menggunakan metode PUT untuk update di Laravel --}}

                <!-- Tampilkan pesan sukses atau error -->
                @if (session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                        <strong class="font-bold">Sukses!</strong>
                        <span class="block sm:inline">{{ session('success') }}</span>
                    </div>
                @endif
                @if (session('error'))
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                        <strong class="font-bold">Error!</strong>
                        <span class="block sm:inline">{{ session('error') }}</span>
                    </div>
                @endif

                <!-- Data Kendaraan -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-10">
                    <!-- Left Column -->
                    <div class="space-y-6">
                        @include('pages.masterKendaraan.components.ubah1', ['kendaraan' => $kendaraan])
                    </div>

                    <!-- Right Column -->
                    <div class="space-y-6">
                        @include('pages.masterKendaraan.components.ubah2', ['kendaraan' => $kendaraan])
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-10">
                    <!-- Left Column -->
                    <div class="space-y-6">
                        @include('pages.masterKendaraan.components.ubah3', ['kendaraan' => $kendaraan])
                    </div>

                    <!-- Right Column -->
                    <div class="space-y-6">
                        @include('pages.masterKendaraan.components.ubah4', ['kendaraan' => $kendaraan])
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="flex justify-end pt-6 border-t mt-4">
                    <button type="submit"
                        class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-gradient-to-r from-blue-600 to-blue-700 rounded-lg hover:from-blue-700 hover:to-blue-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 shadow-sm">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        Simpan Perubahan
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
