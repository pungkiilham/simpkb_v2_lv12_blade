@extends('admin.layouts.admin')

@section('title', 'Display Antrian')
@section('header', 'Display Antrian')

@section('content')
<div class="max-w-6xl mx-auto space-y-6">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Loket 1 -->
        <div class="bg-white rounded-xl shadow-sm p-6">
            <div class="text-center space-y-4">
                <h3 class="text-xl font-semibold text-gray-800">Loket 1</h3>
                <div class="text-5xl font-bold text-blue-600">A-001</div>
                <p class="text-gray-600">Sedang Dilayani</p>
            </div>
        </div>

        <!-- Loket 2 -->
        <div class="bg-white rounded-xl shadow-sm p-6">
            <div class="text-center space-y-4">
                <h3 class="text-xl font-semibold text-gray-800">Loket 2</h3>
                <div class="text-5xl font-bold text-blue-600">B-001</div>
                <p class="text-gray-600">Sedang Dilayani</p>
            </div>
        </div>
    </div>

    <!-- Antrian Selanjutnya -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="bg-white rounded-xl shadow-sm p-6">
            <div class="text-center space-y-4">
                <h3 class="text-xl font-semibold text-gray-800">Antrian Selanjutnya Loket 1</h3>
                <div class="text-4xl font-bold text-gray-400">A-002</div>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-sm p-6">
            <div class="text-center space-y-4">
                <h3 class="text-xl font-semibold text-gray-800">Antrian Selanjutnya Loket 2</h3>
                <div class="text-4xl font-bold text-gray-400">B-002</div>
            </div>
        </div>
    </div>

    <!-- Daftar Antrian -->
    <div class="bg-white rounded-xl shadow-sm p-6">
        <h3 class="text-lg font-semibold text-gray-800 mb-4">Daftar Antrian</h3>
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nomor</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Loket</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Waktu</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">A-001</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-green-600">Dipanggil</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Loket 1</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">09:30</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">B-001</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-green-600">Dipanggil</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Loket 2</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">09:35</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection