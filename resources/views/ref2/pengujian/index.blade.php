@extends('admin.layouts.admin')

@section('title', 'Pengujian')
@section('header', 'Pengujian Kendaraan')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    <div class="bg-white rounded-xl shadow-sm p-6">
        <div class="flex items-center justify-between mb-4">
            <h3 class="text-lg font-semibold text-gray-800">Pengujian Hari Ini</h3>
            <span class="text-2xl font-bold text-blue-600">24</span>
        </div>
        <div class="space-y-4">
            <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
                <div>
                    <p class="font-medium">B 1234 CD</p>
                    <p class="text-sm text-gray-500">Toyota Avanza</p>
                </div>
                <span class="px-3 py-1 text-sm bg-yellow-100 text-yellow-800 rounded-full">Menunggu</span>
            </div>
            <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
                <div>
                    <p class="font-medium">B 5678 EF</p>
                    <p class="text-sm text-gray-500">Honda Jazz</p>
                </div>
                <span class="px-3 py-1 text-sm bg-green-100 text-green-800 rounded-full">Selesai</span>
            </div>
        </div>
        <a href="{{ route('admin.pengujian.jadwal') }}" class="mt-4 block text-center text-blue-600 hover:text-blue-800">
            Lihat Semua
        </a>
    </div>

    <div class="bg-white rounded-xl shadow-sm p-6">
        <div class="flex items-center justify-between mb-4">
            <h3 class="text-lg font-semibold text-gray-800">Status Pengujian</h3>
        </div>
        <div class="space-y-4">
            <div class="flex items-center justify-between">
                <span class="text-gray-600">Menunggu</span>
                <span class="font-semibold">8</span>
            </div>
            <div class="flex items-center justify-between">
                <span class="text-gray-600">Dalam Proses</span>
                <span class="font-semibold">12</span>
            </div>
            <div class="flex items-center justify-between">
                <span class="text-gray-600">Selesai</span>
                <span class="font-semibold">4</span>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-xl shadow-sm p-6">
        <div class="flex items-center justify-between mb-4">
            <h3 class="text-lg font-semibold text-gray-800">Quick Actions</h3>
        </div>
        <div class="space-y-3">
            <button class="w-full p-3 text-left bg-blue-50 text-blue-700 rounded-lg hover:bg-blue-100 transition-colors duration-200">
                Tambah Pengujian Baru
            </button>
            <button class="w-full p-3 text-left bg-green-50 text-green-700 rounded-lg hover:bg-green-100 transition-colors duration-200">
                Lihat Jadwal
            </button>
            <button class="w-full p-3 text-left bg-purple-50 text-purple-700 rounded-lg hover:bg-purple-100 transition-colors duration-200">
                Riwayat Pengujian
            </button>
        </div>
    </div>
</div>
@endsection