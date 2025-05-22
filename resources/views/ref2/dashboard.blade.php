@extends('admin.layouts.admin')

@section('title', 'Dashboard')
@section('header', 'Dashboard')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
    <div class="bg-white rounded-xl shadow-sm p-6">
        <div class="flex items-center justify-between mb-4">
            <h3 class="text-lg font-semibold text-gray-800">Total Kendaraan</h3>
            <span class="text-2xl font-bold text-blue-600">1,234</span>
        </div>
        <p class="text-sm text-gray-500">Kendaraan terdaftar aktif</p>
    </div>

    <div class="bg-white rounded-xl shadow-sm p-6">
        <div class="flex items-center justify-between mb-4">
            <h3 class="text-lg font-semibold text-gray-800">Pengujian Bulan Ini</h3>
            <span class="text-2xl font-bold text-green-600">156</span>
        </div>
        <p class="text-sm text-gray-500">Total pengujian Januari 2024</p>
    </div>

    <div class="bg-white rounded-xl shadow-sm p-6">
        <div class="flex items-center justify-between mb-4">
            <h3 class="text-lg font-semibold text-gray-800">Pendaftaran Baru</h3>
            <span class="text-2xl font-bold text-purple-600">28</span>
        </div>
        <p class="text-sm text-gray-500">Pendaftaran 7 hari terakhir</p>
    </div>

    <div class="bg-white rounded-xl shadow-sm p-6">
        <div class="flex items-center justify-between mb-4">
            <h3 class="text-lg font-semibold text-gray-800">Perpanjangan</h3>
            <span class="text-2xl font-bold text-orange-600">45</span>
        </div>
        <p class="text-sm text-gray-500">Menunggu perpanjangan</p>
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mt-6">
    <div class="bg-white rounded-xl shadow-sm">
        <div class="p-6 border-b border-gray-200">
            <h3 class="text-lg font-semibold text-gray-800">Aktivitas Terbaru</h3>
        </div>
        <div class="p-6">
            <div class="space-y-4">
                <div class="flex items-center space-x-4">
                    <div class="flex-shrink-0">
                        <span class="w-8 h-8 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                            </svg>
                        </span>
                    </div>
                    <div>
                        <p class="text-sm font-medium">Pendaftaran Baru - B 1234 CD</p>
                        <p class="text-xs text-gray-500">2 menit yang lalu</p>
                    </div>
                </div>
                <div class="flex items-center space-x-4">
                    <div class="flex-shrink-0">
                        <span class="w-8 h-8 rounded-full bg-green-100 text-green-600 flex items-center justify-center">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                        </span>
                    </div>
                    <div>
                        <p class="text-sm font-medium">Pengujian Selesai - B 5678 EF</p>
                        <p class="text-xs text-gray-500">15 menit yang lalu</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-xl shadow-sm">
        <div class="p-6 border-b border-gray-200">
            <h3 class="text-lg font-semibold text-gray-800">Jadwal Pengujian Hari Ini</h3>
        </div>
        <div class="p-6">
            <div class="space-y-4">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium">B 1234 CD</p>
                        <p class="text-xs text-gray-500">Toyota Avanza</p>
                    </div>
                    <span class="px-2 py-1 text-xs font-semibold rounded-full bg-yellow-100 text-yellow-800">
                        09:00
                    </span>
                </div>
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium">B 5678 EF</p>
                        <p class="text-xs text-gray-500">Honda HR-V</p>
                    </div>
                    <span class="px-2 py-1 text-xs font-semibold rounded-full bg-yellow-100 text-yellow-800">
                        10:30
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection