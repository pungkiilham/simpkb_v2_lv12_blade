@extends('admin.layouts.admin')

@section('title', 'Pendaftaran')
@section('header', 'Pendaftaran Kendaraan')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    <div class="bg-white rounded-xl shadow-sm p-6">
        <div class="flex items-center justify-between mb-4">
            <h3 class="text-lg font-semibold text-gray-800">Pendaftaran Baru</h3>
            <span class="text-2xl font-bold text-blue-600">15</span>
        </div>
        <div class="space-y-4">
            <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
                <div>
                    <p class="font-medium">Kendaraan Baru</p>
                    <p class="text-sm text-gray-500">Belum Terdaftar</p>
                </div>
                <a href="{{ route('admin.pendaftaran.baru') }}" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                    Daftar
                </a>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-xl shadow-sm p-6">
        <div class="flex items-center justify-between mb-4">
            <h3 class="text-lg font-semibold text-gray-800">Perpanjangan</h3>
            <span class="text-2xl font-bold text-green-600">28</span>
        </div>
        <div class="space-y-4">
            <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
                <div>
                    <p class="font-medium">Perpanjangan KIR</p>
                    <p class="text-sm text-gray-500">Kendaraan Terdaftar</p>
                </div>
                <a href="{{ route('admin.pendaftaran.perpanjangan') }}" class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700">
                    Perpanjang
                </a>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-xl shadow-sm p-6">
        <div class="flex items-center justify-between mb-4">
            <h3 class="text-lg font-semibold text-gray-800">Status Pendaftaran</h3>
        </div>
        <div class="space-y-4">
            <div class="flex items-center justify-between">
                <span class="text-gray-600">Menunggu Verifikasi</span>
                <span class="font-semibold">12</span>
            </div>
            <div class="flex items-center justify-between">
                <span class="text-gray-600">Disetujui</span>
                <span class="font-semibold">25</span>
            </div>
            <div class="flex items-center justify-between">
                <span class="text-gray-600">Ditolak</span>
                <span class="font-semibold">6</span>
            </div>
        </div>
    </div>
</div>

<div class="mt-6 bg-white rounded-xl shadow-sm">
    <div class="p-6 border-b border-gray-200">
        <h3 class="text-lg font-semibold text-gray-800">Pendaftaran Terbaru</h3>
    </div>
    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Tanggal</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">No. Pendaftaran</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Jenis</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Aksi</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm">2024-01-20</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm">REG/2024/001</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm">Baru</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                            Menunggu
                        </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm">
                        <button class="text-blue-600 hover:text-blue-900">Detail</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection