@extends('admin.layouts.admin')

@section('title', 'Panggil Antrian')
@section('header', 'Panggil Antrian')

@section('content')
<div class="max-w-6xl mx-auto space-y-6">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Loket 1 -->
        <div class="bg-white rounded-xl shadow-sm p-6">
            <div class="text-center space-y-4 mb-6">
                <h3 class="text-xl font-semibold text-gray-800">Loket 1</h3>
                <div class="text-5xl font-bold text-blue-600">A-001</div>
            </div>
            <div class="space-y-4">
                <button class="w-full px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                    Panggil Ulang
                </button>
                <button class="w-full px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700">
                    Antrian Selanjutnya
                </button>
                <div class="pt-4">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Status Loket</label>
                    <div class="flex items-center space-x-4">
                        <label class="inline-flex items-center">
                            <input type="radio" class="form-radio text-blue-600" name="status_1" value="active" checked>
                            <span class="ml-2">Aktif</span>
                        </label>
                        <label class="inline-flex items-center">
                            <input type="radio" class="form-radio text-blue-600" name="status_1" value="inactive">
                            <span class="ml-2">Tidak Aktif</span>
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <!-- Loket 2 -->
        <div class="bg-white rounded-xl shadow-sm p-6">
            <div class="text-center space-y-4 mb-6">
                <h3 class="text-xl font-semibold text-gray-800">Loket 2</h3>
                <div class="text-5xl font-bold text-blue-600">B-001</div>
            </div>
            <div class="space-y-4">
                <button class="w-full px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                    Panggil Ulang
                </button>
                <button class="w-full px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700">
                    Antrian Selanjutnya
                </button>
                <div class="pt-4">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Status Loket</label>
                    <div class="flex items-center space-x-4">
                        <label class="inline-flex items-center">
                            <input type="radio" class="form-radio text-blue-600" name="status_2" value="active" checked>
                            <span class="ml-2">Aktif</span>
                        </label>
                        <label class="inline-flex items-center">
                            <input type="radio" class="form-radio text-blue-600" name="status_2" value="inactive">
                            <span class="ml-2">Tidak Aktif</span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Antrian Menunggu -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="bg-white rounded-xl shadow-sm p-6">
            <h3 class="text-lg font-semibold text-gray-800 mb-4">Antrian Menunggu Loket 1</h3>
            <div class="space-y-3">
                <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                    <div class="font-medium">A-002</div>
                    <button class="text-blue-600 hover:text-blue-800">Panggil</button>
                </div>
                <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                    <div class="font-medium">A-003</div>
                    <button class="text-blue-600 hover:text-blue-800">Panggil</button>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-sm p-6">
            <h3 class="text-lg font-semibold text-gray-800 mb-4">Antrian Menunggu Loket 2</h3>
            <div class="space-y-3">
                <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                    <div class="font-medium">B-002</div>
                    <button class="text-blue-600 hover:text-blue-800">Panggil</button>
                </div>
                <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                    <div class="font-medium">B-003</div>
                    <button class="text-blue-600 hover:text-blue-800">Panggil</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection