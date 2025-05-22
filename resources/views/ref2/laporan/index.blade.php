@extends('admin.layouts.admin')

@section('title', 'Laporan Pelayanan')
@section('header', 'Laporan Pelayanan')

@section('content')
<div class="space-y-6">
    <div class="bg-white rounded-xl shadow-sm p-6">
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-6 space-y-4 md:space-y-0">
            <h3 class="text-lg font-semibold text-gray-800">Laporan Pelayanan</h3>
            <div class="flex flex-wrap items-center gap-3">
                <div class="flex items-center space-x-2">
                    <span class="text-sm text-gray-600">Periode:</span>
                    <input type="date" class="rounded-lg border-gray-300" value="{{ date('Y-m-d', strtotime('-7 days')) }}">
                    <span class="text-gray-500">-</span>
                    <input type="date" class="rounded-lg border-gray-300" value="{{ date('Y-m-d') }}">
                </div>
                <button class="px-4 py-2 bg-gray-600 text-white rounded-lg hover:bg-gray-700">
                    Tampilkan
                </button>
                <button class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                    Export PDF
                </button>
            </div>
        </div>

        <!-- Filter Jenis Kendaraan -->
        <div class="mb-6">
            <h4 class="text-sm font-medium text-gray-700 mb-2">Filter Jenis Kendaraan:</h4>
            <div class="flex flex-wrap gap-4">
                <label class="inline-flex items-center">
                    <input type="checkbox" class="rounded border-gray-300 text-blue-600" checked>
                    <span class="ml-2 text-sm text-gray-600">Mobil Penumpang</span>
                </label>
                <label class="inline-flex items-center">
                    <input type="checkbox" class="rounded border-gray-300 text-blue-600" checked>
                    <span class="ml-2 text-sm text-gray-600">Mobil Bus</span>
                </label>
                <label class="inline-flex items-center">
                    <input type="checkbox" class="rounded border-gray-300 text-blue-600" checked>
                    <span class="ml-2 text-sm text-gray-600">Mobil Barang</span>
                </label>
                <label class="inline-flex items-center">
                    <input type="checkbox" class="rounded border-gray-300 text-blue-600" checked>
                    <span class="ml-2 text-sm text-gray-600">Kendaraan Khusus</span>
                </label>
            </div>
        </div>

        <!-- Summary Cards -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
            <div class="bg-gray-50 rounded-lg p-4">
                <h4 class="text-sm font-medium text-gray-600">Total Pelayanan</h4>
                <p class="text-2xl font-bold text-gray-800 mt-1">156</p>
            </div>
            <div class="bg-gray-50 rounded-lg p-4">
                <h4 class="text-sm font-medium text-gray-600">Pengujian Berkala</h4>
                <p class="text-2xl font-bold text-gray-800 mt-1">98</p>
            </div>
            <div class="bg-gray-50 rounded-lg p-4">
                <h4 class="text-sm font-medium text-gray-600">Pendaftaran Baru</h4>
                <p class="text-2xl font-bold text-gray-800 mt-1">32</p>
            </div>
            <div class="bg-gray-50 rounded-lg p-4">
                <h4 class="text-sm font-medium text-gray-600">Perpanjangan</h4>
                <p class="text-2xl font-bold text-gray-800 mt-1">26</p>
            </div>
        </div>

        <div class="overflow-x-auto relative">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50 sticky top-0">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase bg-gray-50">No</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase bg-gray-50">Tanggal</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase bg-gray-50">No. Kendaraan</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase bg-gray-50">Jenis Kendaraan</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase bg-gray-50">Jenis Layanan</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase bg-gray-50">Status</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase bg-gray-50">Waktu</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">1</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">20/01/2024</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">B 1234 CD</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">Mobil Penumpang</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">Pengujian Berkala</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                Selesai
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">09:30</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">2</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">20/01/2024</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">B 5678 EF</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">Mobil Bus</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">Pendaftaran Baru</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                Selesai
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">10:15</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="flex items-center justify-between mt-6">
            <div class="text-sm text-gray-500">
                Menampilkan 1-10 dari 156 data
            </div>
            <div class="flex space-x-2">
                <button class="px-3 py-1 border rounded hover:bg-gray-50">Previous</button>
                <button class="px-3 py-1 border rounded hover:bg-gray-50">Next</button>
            </div>
        </div>
    </div>
</div>
@endsection