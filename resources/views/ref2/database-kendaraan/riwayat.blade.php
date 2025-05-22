@extends('admin.layouts.admin')

@section('title', 'Riwayat Kendaraan')
@section('header', 'Riwayat Kendaraan')

@section('content')
<div class="max-w-4xl mx-auto space-y-6">
    <div class="bg-white rounded-xl shadow-sm p-6">
        <div class="flex items-center justify-between mb-6">
            <div>
                <h3 class="text-lg font-semibold text-gray-800">B 1234 CD</h3>
                <p class="text-sm text-gray-500">Toyota Avanza</p>
            </div>
            <a href="{{ route('admin.database-kendaraan.detail', $id) }}" class="text-blue-600 hover:text-blue-800">
                Lihat Detail
            </a>
        </div>

        <div class="border-t border-gray-200 pt-6">
            <div class="flow-root">
                <ul class="-mb-8">
                    <li>
                        <div class="relative pb-8">
                            <span class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>
                            <div class="relative flex space-x-3">
                                <div>
                                    <span class="h-8 w-8 rounded-full bg-green-500 flex items-center justify-center ring-8 ring-white">
                                        <svg class="h-5 w-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                        </svg>
                                    </span>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <div class="text-sm font-medium text-gray-900">Perpanjangan KIR</div>
                                    <div class="mt-1 text-sm text-gray-500">
                                        <p>Masa Berlaku: 20 Januari 2024 - 20 Januari 2025</p>
                                        <p>Diproses oleh: Admin John</p>
                                    </div>
                                    <div class="mt-2">
                                        <button class="text-sm text-blue-600 hover:text-blue-800">Lihat Dokumen</button>
                                    </div>
                                </div>
                                <div class="whitespace-nowrap text-right text-sm text-gray-500">
                                    20 Jan 2024
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="relative pb-8">
                            <span class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>
                            <div class="relative flex space-x-3">
                                <div>
                                    <span class="h-8 w-8 rounded-full bg-blue-500 flex items-center justify-center ring-8 ring-white">
                                        <svg class="h-5 w-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                        </svg>
                                    </span>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <div class="text-sm font-medium text-gray-900">Pengujian KIR</div>
                                    <div class="mt-1 text-sm text-gray-500">
                                        <p>Status: Lulus</p>
                                        <p>Penguji: Teknisi Jane</p>
                                    </div>
                                    <div class="mt-2">
                                        <button class="text-sm text-blue-600 hover:text-blue-800">Lihat Hasil Uji</button>
                                    </div>
                                </div>
                                <div class="whitespace-nowrap text-right text-sm text-gray-500">
                                    19 Jan 2024
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="relative pb-8">
                            <div class="relative flex space-x-3">
                                <div>
                                    <span class="h-8 w-8 rounded-full bg-gray-500 flex items-center justify-center ring-8 ring-white">
                                        <svg class="h-5 w-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                                        </svg>
                                    </span>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <div class="text-sm font-medium text-gray-900">Pendaftaran Awal</div>
                                    <div class="mt-1 text-sm text-gray-500">
                                        <p>Kendaraan terdaftar pertama kali</p>
                                        <p>Diproses oleh: Admin Sarah</p>
                                    </div>
                                </div>
                                <div class="whitespace-nowrap text-right text-sm text-gray-500">
                                    1 Jan 2023
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="flex justify-end">
        <button class="px-4 py-2 border border-gray-300 rounded-lg hover:bg-gray-50">
            Kembali
        </button>
    </div>
</div>
@endsection