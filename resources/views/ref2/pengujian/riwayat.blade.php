@extends('admin.layouts.admin')

@section('title', 'Riwayat Pengujian')
@section('header', 'Riwayat Pengujian')

@section('content')
<div class="bg-white rounded-xl shadow-sm">
    <div class="p-6 border-b border-gray-200">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
            <div class="flex flex-col sm:flex-row gap-4">
                <input type="text" placeholder="Cari No. Kendaraan" class="rounded-lg border-gray-300">
                <select class="rounded-lg border-gray-300">
                    <option>Semua Status</option>
                    <option>Lulus</option>
                    <option>Tidak Lulus</option>
                </select>
            </div>
            <div class="flex gap-3">
                <button class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                    Filter
                </button>
                <button class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700">
                    Export
                </button>
            </div>
        </div>
    </div>

    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Tanggal</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">No. Kendaraan</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Jenis</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Hasil</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Penguji</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Aksi</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm">2024-01-20</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm">B 1234 CD</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm">Toyota Avanza</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                            Lulus
                        </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm">John Doe</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm space-x-2">
                        <button class="text-blue-600 hover:text-blue-900">Detail</button>
                        <button class="text-green-600 hover:text-green-900">Print</button>
                    </td>
                </tr>
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm">2024-01-19</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm">B 5678 EF</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm">Honda Jazz</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                            Tidak Lulus
                        </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm">Jane Smith</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm space-x-2">
                        <button class="text-blue-600 hover:text-blue-900">Detail</button>
                        <button class="text-green-600 hover:text-green-900">Print</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="p-6">
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
            <div class="text-sm text-gray-500">
                Showing 1 to 10 of 50 entries
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
@endsection