@extends('admin.layouts.admin')

@section('title', 'Jadwal Pengujian')
@section('header', 'Jadwal Pengujian')

@section('content')
<div class="bg-white rounded-xl shadow-sm">
    <div class="p-6 border-b border-gray-200">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold text-gray-800">Jadwal Pengujian</h2>
            <div class="mt-4 md:mt-0 flex space-x-3">
                <input type="date" class="rounded-lg border-gray-300">
                <button class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                    Filter
                </button>
            </div>
        </div>
    </div>

    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">No. Antrian</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">No. Kendaraan</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Jenis</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Waktu</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Aksi</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm">001</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm">B 1234 CD</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm">Toyota Avanza</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm">09:00</td>
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

    <div class="p-6">
        <div class="flex items-center justify-between">
            <div class="text-sm text-gray-500">
                Showing 1 to 10 of 20 entries
            </div>
            <div class="flex space-x-2">
                <button class="px-3 py-1 border rounded-lg hover:bg-gray-50">Previous</button>
                <button class="px-3 py-1 border rounded-lg hover:bg-gray-50">Next</button>
            </div>
        </div>
    </div>
</div>
@endsection