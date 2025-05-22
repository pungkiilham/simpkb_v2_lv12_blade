@extends('admin.layouts.admin')

@section('title', 'Database Kendaraan')
@section('header', 'Database Kendaraan')

@section('content')
<div class="space-y-6">
    <div class="bg-white rounded-xl shadow-sm p-6">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
            <div class="flex flex-col sm:flex-row gap-4">
                <input type="text" placeholder="Cari No. Kendaraan" class="rounded-lg border-gray-300">
                <select class="rounded-lg border-gray-300">
                    <option>Semua Jenis</option>
                    <option>Mobil Penumpang</option>
                    <option>Mobil Barang</option>
                    <option>Bus</option>
                </select>
            </div>
            <div class="flex gap-3">
                <button class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                    Filter
                </button>
                <button class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700">
                    Export Data
                </button>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-xl shadow-sm">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">No. Kendaraan</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Jenis</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Merk/Tipe</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Pemilik</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status KIR</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Aksi</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-medium text-gray-900">B 1234 CD</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">Mobil Penumpang</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">Toyota Avanza</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">John Doe</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                Aktif
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium space-x-2">
                            <a href="{{ route('admin.database-kendaraan.detail', 1) }}" class="text-blue-600 hover:text-blue-900">Detail</a>
                            <a href="{{ route('admin.database-kendaraan.riwayat', 1) }}" class="text-green-600 hover:text-green-900">Riwayat</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="p-6">
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                <div class="text-sm text-gray-500">
                    Showing 1 to 10 of 100 entries
                </div>
                <div class="flex justify-center space-x-2">
                    <button class="px-3 py-1 border rounded-lg hover:bg-gray-50 disabled:opacity-50">Previous</button>
                    <button class="px-3 py-1 bg-blue-600 text-white rounded-lg">1</button>
                    <button class="px-3 py-1 border rounded-lg hover:bg-gray-50">2</button>
                    <button class="px-3 py-1 border rounded-lg hover:bg-gray-50">3</button>
                    <button class="px-3 py-1 border rounded-lg hover:bg-gray-50">Next</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection