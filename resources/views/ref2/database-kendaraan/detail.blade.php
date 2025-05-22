@extends('admin.layouts.admin')

@section('title', 'Detail Kendaraan')
@section('header', 'Detail Kendaraan')

@section('content')
<div class="max-w-4xl mx-auto space-y-6">
    <div class="bg-white rounded-xl shadow-sm p-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <h3 class="text-lg font-semibold text-gray-800 mb-4">Informasi Kendaraan</h3>
                <div class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-500">Nomor Kendaraan</label>
                        <p class="mt-1 text-sm text-gray-900">B 1234 CD</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-500">Jenis Kendaraan</label>
                        <p class="mt-1 text-sm text-gray-900">Mobil Penumpang</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-500">Merk/Tipe</label>
                        <p class="mt-1 text-sm text-gray-900">Toyota Avanza</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-500">Tahun Pembuatan</label>
                        <p class="mt-1 text-sm text-gray-900">2020</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-500">Warna</label>
                        <p class="mt-1 text-sm text-gray-900">Hitam</p>
                    </div>
                </div>
            </div>

            <div>
                <h3 class="text-lg font-semibold text-gray-800 mb-4">Informasi Pemilik</h3>
                <div class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-500">Nama Pemilik</label>
                        <p class="mt-1 text-sm text-gray-900">John Doe</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-500">Alamat</label>
                        <p class="mt-1 text-sm text-gray-900">Jl. Contoh No. 123, Jakarta</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-500">No. Telepon</label>
                        <p class="mt-1 text-sm text-gray-900">08123456789</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-xl shadow-sm p-6">
        <h3 class="text-lg font-semibold text-gray-800 mb-4">Status KIR</h3>
        <div class="space-y-4">
            <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
                <div>
                    <p class="font-medium text-gray-900">Masa Berlaku</p>
                    <p class="text-sm text-gray-500">20 Januari 2024 - 20 Januari 2025</p>
                </div>
                <span class="px-3 py-1 text-sm bg-green-100 text-green-800 rounded-full">Aktif</span>
            </div>
            <div class="flex items-center justify-between">
                <span class="text-sm text-gray-500">Terakhir Diperbarui: 20 Januari 2024</span>
                <a href="{{ route('admin.database-kendaraan.riwayat', $id) }}" class="text-blue-600 hover:text-blue-800">
                    Lihat Riwayat
                </a>
            </div>
        </div>
    </div>

    <div class="flex justify-end space-x-3">
        <button class="px-4 py-2 border border-gray-300 rounded-lg hover:bg-gray-50">
            Kembali
        </button>
        <button class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
            Edit Data
        </button>
    </div>
</div>
@endsection